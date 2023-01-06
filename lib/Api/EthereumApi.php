<?php

/**
 * Implementation of Ethereum API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * Ethereum API
 */
class EthereumApi extends AbstractApi {
    /**
     * Broadcast signed Ethereum transaction
     *
     * @param \Tatum\Model\BroadcastKMS $broadcast_kms 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function ethBroadcast(\Tatum\Model\BroadcastKMS $broadcast_kms, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\TransactionHash $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ethereum/broadcast", [], $rHeaders, [], $broadcast_kms
            ), 
            "\Tatum\Model\TransactionHash"
        );
            
        return $result;
    }
    
    /**
     * Generate Ethereum account address from Extended public key
     *
     * @param string $xpub Extended public key of wallet.
     * @param float $index Derivation index of the address to be generated.
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\GeneratedAddressEth
     */
    public function ethGenerateAddress(string $xpub, float $index, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\GeneratedAddressEth $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ethereum/address/{xpub}/{index}", ["xpub" => $xpub, "index" => $index]), [], $rHeaders, []
            ), 
            "\Tatum\Model\GeneratedAddressEth"
        );
            
        return $result;
    }
    
    /**
     * Generate Ethereum private key
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function ethGenerateAddressPrivateKey(\Tatum\Model\PrivKeyRequest $priv_key_request, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\PrivKey $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ethereum/wallet/priv", [], $rHeaders, [], $priv_key_request
            ), 
            "\Tatum\Model\PrivKey"
        );
            
        return $result;
    }
    
    /**
     * Generate Ethereum wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generating extended public and private keys.
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Wallet
     */
    public function ethGenerateWallet(string $mnemonic = null, string $x_testnet_type = 'ethereum-sepolia') {
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new IAE('Invalid length for "$mnemonic" when calling EthereumApi.ethGenerateWallet, must be smaller than or equal to 500');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\Wallet $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/ethereum/wallet", [
                    "mnemonic" => isset($mnemonic) ? S::toQueryValue($mnemonic) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Wallet"
        );
            
        return $result;
    }
    
    /**
     * Get the ETH balance of an Ethereum account
     *
     * @param string $address Account address you want to get balance of
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthBalance
     */
    public function ethGetBalance(string $address, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\EthBalance $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ethereum/account/balance/{address}", ["address" => $address]), [], $rHeaders, []
            ), 
            "\Tatum\Model\EthBalance"
        );
            
        return $result;
    }
    
    /**
     * Get Ethereum block by hash
     *
     * @param string $hash Block hash or block number
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthBlock
     */
    public function ethGetBlock(string $hash, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\EthBlock $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ethereum/block/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\EthBlock"
        );
            
        return $result;
    }
    
    /**
     * Get current block number
     *
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function ethGetCurrentBlock(string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/ethereum/block/current", [], $rHeaders, []
            ), 
            "float"
        );
            
        return $result;
    }
    
    /**
     * Get Ethereum internal transactions by address
     *
     * @param string $address Account address you want to get balance of
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthTxInternal[]
     */
    public function ethGetInternalTransactionByAddress(string $address, float $page_size, float $offset = null, string $x_testnet_type = 'ethereum-sepolia') {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling EthereumApi.ethGetInternalTransactionByAddress, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling EthereumApi.ethGetInternalTransactionByAddress, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\EthTxInternal[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ethereum/account/transaction/erc20/internal/{address}", ["address" => $address]), [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\EthTxInternal[]"
        );
            
        return $result;
    }
    
    /**
     * Get Ethereum Transaction
     *
     * @param string $hash Transaction hash
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthTx
     */
    public function ethGetTransaction(string $hash, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\EthTx $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ethereum/transaction/{hash}", ["hash" => $hash]), [], $rHeaders, []
            ), 
            "\Tatum\Model\EthTx"
        );
            
        return $result;
    }
    
    /**
     * Get Ethereum transactions by address
     *
     * @param string $address Account address you want to get balance of
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param float|null $from Transactions from this block onwards will be included.
     * @param float|null $to Transactions up to this block will be included.
     * @param string|'DESC' $sort Sorting of the data. ASC - oldest first, DESC - newest first.
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthTx[]
     */
    public function ethGetTransactionByAddress(string $address, float $page_size, float $offset = null, float $from = null, float $to = null, string $sort = 'DESC', string $x_testnet_type = 'ethereum-sepolia') {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling EthereumApi.ethGetTransactionByAddress, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling EthereumApi.ethGetTransactionByAddress, must be bigger than or equal to 1.');
        }

        if (isset($from) && $from < 1) {
            throw new IAE('Invalid value for "$from" when calling EthereumApi.ethGetTransactionByAddress, must be bigger than or equal to 1.');
        }

        if (isset($to) && $to < 1) {
            throw new IAE('Invalid value for "$to" when calling EthereumApi.ethGetTransactionByAddress, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\EthTx[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ethereum/account/transaction/{address}", ["address" => $address]), [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "from" => isset($from) ? S::toQueryValue($from) : null,
                    "to" => isset($to) ? S::toQueryValue($to) : null,
                    "sort" => S::toQueryValue($sort),
                ], $rHeaders, []
            ), 
            "\Tatum\Model\EthTx[]"
        );
            
        return $result;
    }
    
    /**
     * Get count of outgoing Ethereum transactions
     *
     * @param string $address address
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return float
     */
    public function ethGetTransactionCount(string $address, string $x_testnet_type = 'ethereum-sepolia') {
        if (strlen($address) > 42) {
            throw new IAE('Invalid length for "$address" when calling EthereumApi.ethGetTransactionCount, must be smaller than or equal to 42');
        }

        if (strlen($address) < 42) {
            throw new IAE('Invalid length for "$address" when calling EthereumApi.ethGetTransactionCount, must be bigger than or equal to 42');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var float $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ethereum/transaction/count/{address}", ["address" => $address]), [], $rHeaders, []
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
     * @param string|'ethereum-sepolia' $testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return object
     */
    public function ethWeb3Driver(string $x_api_key, object $body, string $testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var object $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/ethereum/web3/{xApiKey}", ["xApiKey" => $x_api_key]), [
                    "testnetType" => S::toQueryValue($testnet_type),
                ], $rHeaders, [], $body
            ), 
            "object"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on Ethereum
     *
     * @param \Tatum\Model\CallReadSmartContractMethod $call_read_smart_contract_method 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response
     */
    public function ethereumSmartcontractCallReadSmartContractMethod(\Tatum\Model\CallReadSmartContractMethod $call_read_smart_contract_method, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ethereum/smartcontract", [], $rHeaders, [], $call_read_smart_contract_method
            ), 
            "\Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on Ethereum
     *
     * @param \Tatum\Model\CallSmartContractMethod $call_smart_contract_method 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response
     */
    public function ethereumSmartcontractCallSmartContractMethod(\Tatum\Model\CallSmartContractMethod $call_smart_contract_method, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ethereum/smartcontract", [], $rHeaders, [], $call_smart_contract_method
            ), 
            "\Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Invoke a method in a smart contract on Ethereum
     *
     * @param \Tatum\Model\CallSmartContractMethodKMS $call_smart_contract_method_kms 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response
     */
    public function ethereumSmartcontractCallSmartContractMethodKMS(\Tatum\Model\CallSmartContractMethodKMS $call_smart_contract_method_kms, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ethereum/smartcontract", [], $rHeaders, [], $call_smart_contract_method_kms
            ), 
            "\Tatum\Model\EthereumSmartcontractCallSmartContractMethod200Response"
        );
            
        return $result;
    }
    
    /**
     * Send Ethereum / ERC20 from account to account
     *
     * @param \Tatum\Model\TransferEthBlockchain $transfer_eth_blockchain 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function ethereumTransactionTransferEthBlockchain(\Tatum\Model\TransferEthBlockchain $transfer_eth_blockchain, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ethereum/transaction", [], $rHeaders, [], $transfer_eth_blockchain
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
    /**
     * Send Ethereum / ERC20 from account to account
     *
     * @param \Tatum\Model\TransferEthBlockchainKMS $transfer_eth_blockchain_kms 
     * @param string|'ethereum-sepolia' $x_testnet_type Type of Ethereum testnet. Defaults to ethereum-sepolia.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response
     */
    public function ethereumTransactionTransferEthBlockchainKMS(\Tatum\Model\TransferEthBlockchainKMS $transfer_eth_blockchain_kms, string $x_testnet_type = 'ethereum-sepolia') {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);
        $rHeaders = array_merge(
            [
                "x-testnet-type" => isset($x_testnet_type) ? S::toHeaderValue($x_testnet_type) : null,
            ], 
            $rHeaders
        );

        /** @var \Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ethereum/transaction", [], $rHeaders, [], $transfer_eth_blockchain_kms
            ), 
            "\Tatum\Model\BitcoinTransactionBtcTransactionFromAddress200Response"
        );
            
        return $result;
    }
    
}
