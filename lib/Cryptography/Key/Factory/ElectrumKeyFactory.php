<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Key\Factory;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Bitcoin;
use Tatum\Cryptography\Crypto\EcAdapter\Adapter\EcAdapterInterface;
use Tatum\Cryptography\Crypto\EcAdapter\Key\KeyInterface;
use Tatum\Cryptography\Key\Deterministic\ElectrumKey;
use Tatum\Cryptography\Mnemonic\Electrum\ElectrumWordListInterface;
use Tatum\Cryptography\Mnemonic\MnemonicFactory;
use Tatum\Cryptography\Buffertools\Buffer;
use Tatum\Cryptography\Buffertools\BufferInterface;

class ElectrumKeyFactory {
    /**
     * @var EcAdapterInterface
     */
    private $adapter;

    /**
     * @var PrivateKeyFactory
     */
    private $privateFactory;

    /**
     * ElectrumKeyFactory constructor.
     * @param EcAdapterInterface|null $ecAdapter
     */
    public function __construct(EcAdapterInterface $ecAdapter = null) {
        $this->adapter = $ecAdapter ?: Bitcoin::getEcAdapter();
        $this->privateFactory = new PrivateKeyFactory($ecAdapter);
    }

    /**
     * @param string $mnemonic
     * @param ElectrumWordListInterface $wordList
     * @return ElectrumKey
     * @throws \Exception
     */
    public function fromMnemonic(string $mnemonic, ElectrumWordListInterface $wordList = null): ElectrumKey {
        $mnemonicConverter = MnemonicFactory::electrum($wordList, $this->adapter);
        $entropy = $mnemonicConverter->mnemonicToEntropy($mnemonic);
        return $this->getKeyFromSeed($entropy);
    }

    /**
     * @param BufferInterface $seed
     * @return ElectrumKey
     * @throws \Exception
     */
    public function getKeyFromSeed(BufferInterface $seed): ElectrumKey {
        // Really weird, did electrum actually hash hex string seeds?
        $binary = $oldseed = $seed->getHex();

        // Perform sha256 hash 5 times per iteration
        for ($i = 0; $i < 5 * 20000; $i++) {
            // Hash should return binary data
            $binary = hash("sha256", $binary . $oldseed, true);
        }

        // Convert binary data to hex.
        $secretExponent = new Buffer($binary, 32);

        return $this->fromSecretExponent($secretExponent);
    }

    /**
     * @param BufferInterface $secret
     * @return ElectrumKey
     */
    public function fromSecretExponent(BufferInterface $secret): ElectrumKey {
        $masterKey = $this->privateFactory->fromBufferUncompressed($secret);
        return $this->fromKey($masterKey);
    }

    /**
     * @param KeyInterface $key
     * @return ElectrumKey
     */
    public function fromKey(KeyInterface $key): ElectrumKey {
        return new ElectrumKey($key);
    }
}
