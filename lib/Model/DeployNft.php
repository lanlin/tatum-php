<?php

/**
 * DeployNft Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;

use InvalidArgumentException as IAE;

/**
 * DeployNft Model
 */
class DeployNft extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_KCS = 'KCS';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_BSC = 'BSC';
    protected static $_name = "DeployNft";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "name" => ["name", "string", null, "getName", "setName"], 
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "provenance" => ["provenance", "bool", null, "getProvenance", "setProvenance"], 
        "cashback" => ["cashback", "bool", null, "getCashback", "setCashback"], 
        "public_mint" => ["publicMint", "bool", null, "getPublicMint", "setPublicMint"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee"]
    ];

    /**
     * DeployNft
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "name"=>null, "symbol"=>null, "from_private_key"=>null, "provenance"=>null, "cashback"=>null, "public_mint"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['name'])) {
            $ip[] = "'name' can't be null";
        }
        if ((mb_strlen($this->_data['name']) > 100)) {
            $ip[] = "'name' length must be <= 100";
        }
        if ((mb_strlen($this->_data['name']) < 1)) {
            $ip[] = "'name' length must be >= 1";
        }
        if (is_null($this->_data['symbol'])) {
            $ip[] = "'symbol' can't be null";
        }
        if ((mb_strlen($this->_data['symbol']) > 30)) {
            $ip[] = "'symbol' length must be <= 30";
        }
        if ((mb_strlen($this->_data['symbol']) < 1)) {
            $ip[] = "'symbol' length must be >= 1";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 103)) {
            $ip[] = "'from_private_key' length must be <= 103";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 66)) {
            $ip[] = "'from_private_key' length must be >= 66";
        }
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_ETH,
            self::CHAIN_MATIC,
            self::CHAIN_KCS,
            self::CHAIN_ONE,
            self::CHAIN_KLAY,
            self::CHAIN_BSC,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("DeployNft.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string {
        return $this->_data["name"];
    }

    /**
     * Set name
     * 
     * @param string $name Name of the NFT token
     * @return $this
     */
    public function setName(string $name) {
        if ((mb_strlen($name) > 100)) {
            throw new IAE('DeployNft.setName: $name length must be <= 100');
        }
        if ((mb_strlen($name) < 1)) {
            throw new IAE('DeployNft.setName: $name length must be >= 1');
        }
        $this->_data['name'] = $name;

        return $this;
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol(): string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string $symbol Symbol of the NFT token
     * @return $this
     */
    public function setSymbol(string $symbol) {
        if ((mb_strlen($symbol) > 30)) {
            throw new IAE('DeployNft.setSymbol: $symbol length must be <= 30');
        }
        if ((mb_strlen($symbol) < 1)) {
            throw new IAE('DeployNft.setSymbol: $symbol length must be >= 1');
        }
        $this->_data['symbol'] = $symbol;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of account address, from which gas for deployment of ERC721 will be paid. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 103)) {
            throw new IAE('DeployNft.setFromPrivateKey: $from_private_key length must be <= 103');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('DeployNft.setFromPrivateKey: $from_private_key length must be >= 66');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get provenance
     *
     * @return bool|null
     */
    public function getProvenance(): ?bool {
        return $this->_data["provenance"];
    }

    /**
     * Set provenance
     * 
     * @param bool|null $provenance True if the contract is provenance percentage royalty type. False by default. <a href=\"https://github.com/tatumio/smart-contracts\" target=\"_blank\">Details and sources available here.</a>
     * @return $this
     */
    public function setProvenance(?bool $provenance) {
        $this->_data['provenance'] = $provenance;

        return $this;
    }

    /**
     * Get cashback
     *
     * @return bool|null
     */
    public function getCashback(): ?bool {
        return $this->_data["cashback"];
    }

    /**
     * Set cashback
     * 
     * @param bool|null $cashback True if the contract is fixed price royalty type. False by default. <a href=\"https://github.com/tatumio/smart-contracts\" target=\"_blank\">Details and sources available here.</a>
     * @return $this
     */
    public function setCashback(?bool $cashback) {
        $this->_data['cashback'] = $cashback;

        return $this;
    }

    /**
     * Get public_mint
     *
     * @return bool|null
     */
    public function getPublicMint(): ?bool {
        return $this->_data["public_mint"];
    }

    /**
     * Set public_mint
     * 
     * @param bool|null $public_mint True if the contract is publicMint type. False by default.
     * @return $this
     */
    public function setPublicMint(?bool $public_mint) {
        $this->_data['public_mint'] = $public_mint;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('DeployNft.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\CustomFee|null
     */
    public function getFee(): ?\Tatum\Model\CustomFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\CustomFee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\CustomFee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}
