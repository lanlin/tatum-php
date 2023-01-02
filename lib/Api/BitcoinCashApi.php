<?php

/**
 * Implementation of BitcoinCash API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @see       https://apidoc.tatum.io/tag/BitcoinCash
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * BitcoinCash API
 */
class BitcoinCashApi extends AbstractApi {
    /**
     * Broadcast signed Bitcoin Cash transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function bchBroadcast(\Tatum\Model\BroadcastKMS $broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/bcash/broadcast", [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate Bitcoin Cash deposit address from Extended public key
     *
     * @param string $xpub Extended public key of wallet.
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BchGenerateAddress200Response
     */
    public function bchGenerateAddress(string $xpub, float $index) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\BchGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/bcash/address/{xpub}/{index}", ["xpub" => $xpub, "index" => $index]), [], $rHeaders, []
            ), 
            "\Tatum\Model\BchGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate Bitcoin Cash private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function bchGenerateAddressPrivateKey(\Tatum\Model\PrivKeyRequest $priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/bcash/wallet/priv", [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate Bitcoin Cash wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function bchGenerateWallet(string $mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling BitcoinCashApi.bchGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/bcash/wallet", [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }
    
    /**
     * Get Bitcoin Cash Block by hash
     *
     * @param string $hash Block hash or height
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BchBlock
     */
    public function bchGetBlock(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\BchBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/bcash/block/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\BchBlock"
        );
            
        return $result;
    }
    
    /**
     * Get Bitcoin Cash Blockchain Information
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BchInfo
     */
    public function bchGetBlockChainInfo() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\BchInfo $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/bcash/info", [], $rHeaders, []
            ), 
            "\Tatum\Model\BchInfo"
        );
            
        return $result;
    }
    
    /**
     * Get Bitcoin Cash Block hash
     *
     * @param float $i The number of blocks preceding a particular block on a block chain.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BchGetBlockHash200Response
     */
    public function bchGetBlockHash(float $i) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\BchGetBlockHash200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/bcash/block/hash/{i}", ["i" => $i]), [], $rHeaders, []
            ), 
            "\Tatum\Model\BchGetBlockHash200Response"
        );
            
        return $result;
    }
    
    /**
     * Get Bitcoin Cash Transaction by hash
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BchTx
     */
    public function bchGetRawTransaction(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\BchTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/bcash/transaction/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\BchTx"
        );
            
        return $result;
    }
    
    /**
     * Get Bitcoin Cash Transactions by address
     *
     * @param string $address Address
     * @param int|null $skip Define, how much transactions should be skipped to obtain another page.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BchTx[]
     */
    public function bchGetTxByAddress(string $address, int $skip = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\BchTx[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/bcash/transaction/address/{address}", ["address" => $address]), [
                    "skip" => isset($skip) ? S::toQueryValue($skip) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\BchTx[]"
        );
            
        return $result;
    }
    
    /**
     * JSON RPC HTTP driver
     *
     * @param \Tatum\Model\BchRpcDriverRequest $bch_rpc_driver_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function bchRpcDriver(\Tatum\Model\BchRpcDriverRequest $bch_rpc_driver_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/bcash/node", [], $rHeaders, [], $bch_rpc_driver_request
            ), 
            "object"
        );
            
        return $result;
    }
    
    /**
     * Send BCH to Bitcoin Cash addresses
     *
     * @param \Tatum\Model\BchTransferBlockchainRequest $bch_transfer_blockchain_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTransferBlockchain200Response
     */
    public function bchTransferBlockchain(\Tatum\Model\BchTransferBlockchainRequest $bch_transfer_blockchain_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BtcTransferBlockchain200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/bcash/transaction", [], $rHeaders, [], $bch_transfer_blockchain_request
            ), 
            "\Tatum\Model\BtcTransferBlockchain200Response"
        );
            
        return $result;
    }
    
}
