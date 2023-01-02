<?php

/**
 * Implementation of Elrond API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @see       https://apidoc.tatum.io/tag/Elrond
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * Elrond API
 */
class ElrondApi extends AbstractApi {
    /**
     * Get current block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function eGldGetCurrentBlock() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/egld/block/current", [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Send EGLD from account to account
     *
     * @param \Tatum\Model\EgldBlockchainTransferRequest $egld_blockchain_transfer_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTransferBlockchain200Response
     */
    public function egldBlockchainTransfer(\Tatum\Model\EgldBlockchainTransferRequest $egld_blockchain_transfer_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BtcTransferBlockchain200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/egld/transaction", [], $rHeaders, [], $egld_blockchain_transfer_request
            ), 
            "\Tatum\Model\BtcTransferBlockchain200Response"
        );
            
        return $result;
    }
    
    /**
     * Broadcast signed EGLD transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function egldBroadcast(\Tatum\Model\BroadcastKMS $broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/egld/broadcast", [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate EGLD account address from mnemonic
     *
     * @param string $mnemonic Mnemonic to use for generation of address.
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EgldGenerateAddress200Response
     */
    public function egldGenerateAddress(string $mnemonic, float $index) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\EgldGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/egld/address/{mnemonic}/{index}", ["mnemonic" => $mnemonic, "index" => $index]), [], $rHeaders, []
            ), 
            "\Tatum\Model\EgldGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate EGLD private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function egldGenerateAddressPrivateKey(\Tatum\Model\PrivKeyRequest $priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/egld/wallet/priv", [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate EGLD wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of private key.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EgldGenerateWallet200Response
     */
    public function egldGenerateWallet(string $mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling ElrondApi.egldGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\EgldGenerateWallet200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/egld/wallet", [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\EgldGenerateWallet200Response"
        );
            
        return $result;
    }
    
    /**
     * Get EGLD Account balance
     *
     * @param string $address Account address you want to get balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EgldGetBalance200Response
     */
    public function egldGetBalance(string $address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\EgldGetBalance200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/egld/account/balance/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\EgldGetBalance200Response"
        );
            
        return $result;
    }
    
    /**
     * Get EGLD block by hash
     *
     * @param string $hash Block hash or nonce
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EgldBlock
     */
    public function egldGetBlock(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\EgldBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/egld/block/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\EgldBlock"
        );
            
        return $result;
    }
    
    /**
     * Get EGLD Transaction
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EgldTx
     */
    public function egldGetTransaction(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\EgldTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/egld/transaction/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\EgldTx"
        );
            
        return $result;
    }
    
    /**
     * Get count of outgoing EGLD transactions
     *
     * @param string $address address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object[]
     */
    public function egldGetTransactionAddress(string $address) {
        if (strlen($address) > 62) {
            throw new IAE('Invalid length for "$address" when calling ElrondApi.egldGetTransactionAddress, must be smaller than or equal to 62');
        }

        if (strlen($address) < 62) {
            throw new IAE('Invalid length for "$address" when calling ElrondApi.egldGetTransactionAddress, must be bigger than or equal to 62');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var object[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/egld/transaction/address/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "object[]"
        );
            
        return $result;
    }
    
    /**
     * Get count of outgoing EGLD transactions
     *
     * @param string $address address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function egldGetTransactionCount(string $address) {
        if (strlen($address) > 62) {
            throw new IAE('Invalid length for "$address" when calling ElrondApi.egldGetTransactionCount, must be smaller than or equal to 62');
        }

        if (strlen($address) < 62) {
            throw new IAE('Invalid length for "$address" when calling ElrondApi.egldGetTransactionCount, must be bigger than or equal to 62');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/egld/transaction/count/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Node HTTP driver
     *
     * @param string $x_api_key Tatum X-API-Key used for authorization.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function egldNodeGet(string $x_api_key) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/egld/node/{xApiKey}/*", ["xApiKey" => $x_api_key]), [], $rHeaders, []
            ), 
            "object"
        );
            
        return $result;
    }
    
    /**
     * Node HTTP driver
     *
     * @param string $x_api_key Tatum X-API-Key used for authorization.
     * @param object $body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function egldNodePost(string $x_api_key, object $body) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/egld/node/{xApiKey}/*", ["xApiKey" => $x_api_key]), [], $rHeaders, [], $body
            ), 
            "object"
        );
            
        return $result;
    }
    
}
