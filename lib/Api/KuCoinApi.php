<?php

/**
 * Implementation of KuCoin API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @see       https://apidoc.tatum.io/tag/KuCoin
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * KuCoin API
 */
class KuCoinApi extends AbstractApi {
    /**
     * Invoke a method in a smart contract on KuCoin Community Chain
     *
     * @param \Tatum\Model\KcsBlockchainSmartContractInvocationRequest $kcs_blockchain_smart_contract_invocation_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthBlockchainSmartContractInvocation200Response
     */
    public function kcsBlockchainSmartContractInvocation(\Tatum\Model\KcsBlockchainSmartContractInvocationRequest $kcs_blockchain_smart_contract_invocation_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\EthBlockchainSmartContractInvocation200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/kcs/smartcontract", [], $rHeaders, [], $kcs_blockchain_smart_contract_invocation_request
            ), 
            "\Tatum\Model\EthBlockchainSmartContractInvocation200Response"
        );
            
        return $result;
    }
    
    /**
     * Send KCS from account to account
     *
     * @param \Tatum\Model\KcsBlockchainTransferRequest $kcs_blockchain_transfer_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BtcTransferBlockchain200Response
     */
    public function kcsBlockchainTransfer(\Tatum\Model\KcsBlockchainTransferRequest $kcs_blockchain_transfer_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\BtcTransferBlockchain200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/kcs/transaction", [], $rHeaders, [], $kcs_blockchain_transfer_request
            ), 
            "\Tatum\Model\BtcTransferBlockchain200Response"
        );
            
        return $result;
    }
    
    /**
     * Broadcast signed Kcs transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function kcsBroadcast(\Tatum\Model\BroadcastKMS $broadcast_kms) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/kcs/broadcast", [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate Kcs account address from Extended public key
     *
     * @param string $xpub Extended public key of wallet.
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\KcsGenerateAddress200Response
     */
    public function kcsGenerateAddress(string $xpub, float $index) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\KcsGenerateAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/kcs/address/{xpub}/{index}", ["xpub" => $xpub, "index" => $index]), [], $rHeaders, []
            ), 
            "\Tatum\Model\KcsGenerateAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Generate Kcs private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function kcsGenerateAddressPrivateKey(\Tatum\Model\PrivKeyRequest $priv_key_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/kcs/wallet/priv", [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate Kcs wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function kcsGenerateWallet(string $mnemonic = null) {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling KuCoinApi.kcsGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/kcs/wallet", [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }
    
    /**
     * Get Kcs Account balance
     *
     * @param string $address Account address you want to get balance of
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\KcsGetBalance200Response
     */
    public function kcsGetBalance(string $address) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\KcsGetBalance200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/kcs/account/balance/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\KcsGetBalance200Response"
        );
            
        return $result;
    }
    
    /**
     * Get Kcs block by hash
     *
     * @param string $hash Block hash or block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthBlock
     */
    public function kcsGetBlock(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\EthBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/kcs/block/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\EthBlock"
        );
            
        return $result;
    }
    
    /**
     * Get current block number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function kcsGetCurrentBlock() {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/kcs/block/current", [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Get Kcs Transaction
     *
     * @param string $hash Transaction hash
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\KcsTx
     */
    public function kcsGetTransaction(string $hash) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\KcsTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/kcs/transaction/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\KcsTx"
        );
            
        return $result;
    }
    
    /**
     * Get count of outgoing Kcs transactions
     *
     * @param string $address address
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function kcsGetTransactionCount(string $address) {
        if (strlen($address) > 42) {
            throw new IAE('Invalid length for "$address" when calling KuCoinApi.kcsGetTransactionCount, must be smaller than or equal to 42');
        }

        if (strlen($address) < 42) {
            throw new IAE('Invalid length for "$address" when calling KuCoinApi.kcsGetTransactionCount, must be bigger than or equal to 42');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/kcs/transaction/count/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Web3 HTTP driver
     *
     * @param string $x_api_key Tatum X-API-Key used for authorization.
     * @param object $body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function kcsWeb3Driver(string $x_api_key, object $body) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/kcs/web3/{xApiKey}", ["xApiKey" => $x_api_key]), [], $rHeaders, [], $body
            ), 
            "object"
        );
            
        return $result;
    }
    
}
