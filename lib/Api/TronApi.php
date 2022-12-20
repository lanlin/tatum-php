<?php

/**
 * Implementation of Tron API
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

namespace Tatum\Api;

use InvalidArgumentException;
use Tatum\Sdk\ApiException;
use Tatum\Sdk\ObjectSerializer;

/**
 * Tron API
 */
class TronApi extends AbstractApi {
    /**
     * Generate a TRON wallet
     *
     * @param string|null $mnemonic Mnemonic to use for generation of extended public and private keys.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TronWallet
     */
    public function generateTronwallet(string $mnemonic = null) { 
        if (isset($mnemonic) && strlen($mnemonic) > 500) {
            throw new InvalidArgumentException('Invalid length for "$mnemonic" when calling TronApi.generateTronwallet, must be smaller than or equal to 500');
        }

        // Resource path
        $resourcePath = "/v3/tron/wallet";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [
                "mnemonic" => isset($mnemonic) ? ObjectSerializer::toQueryValue($mnemonic) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TronWallet $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\TronWallet"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TronWallet",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get all transactions for a TRON account
     *
     * @param string $address The address of the TRON account to get all transactions for
     * @param string|null $next The ID of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API).
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TronAccountTx200Response
     */
    public function tronAccountTx(string $address, string $next = null) { 
        // Resource path
        $resourcePath = "/v3/tron/transaction/account/{address}";
        $resourcePath = str_replace("{" . "address" . "}", ObjectSerializer::toPathValue($address), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [
                "next" => isset($next) ? ObjectSerializer::toQueryValue($next) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TronAccountTx200Response $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\TronAccountTx200Response"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TronAccountTx200Response",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get TRC-20 transactions for a TRON account
     *
     * @param string $address The address of the TRON account to get TRC-20 transactions for
     * @param string|null $next The ID of the transaction that follows the last (200&lt;sup&gt;th&lt;/sup&gt;) transaction in the returned list of transactions. Use it to get the next 200 transactions for the specified account (for more information, see the description of this API).
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TronAccountTx20200Response
     */
    public function tronAccountTx20(string $address, string $next = null) { 
        // Resource path
        $resourcePath = "/v3/tron/transaction/account/{address}/trc20";
        $resourcePath = str_replace("{" . "address" . "}", ObjectSerializer::toPathValue($address), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [
                "next" => isset($next) ? ObjectSerializer::toQueryValue($next) : null,
            ];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TronAccountTx20200Response $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\TronAccountTx20200Response"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TronAccountTx20200Response",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Broadcast a TRON transaction
     *
     * @param \Tatum\Model\TronBroadcast $tron_broadcast 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function tronBroadcast(\Tatum\Model\TronBroadcast $tron_broadcast) { 
        // Resource path
        $resourcePath = "/v3/tron/broadcast";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TransactionHash $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $tron_broadcast
                ),
                "\Tatum\Model\TransactionHash"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TransactionHash",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Create a TRC-10 token
     *
     * @param \Tatum\Model\TronCreateTrc10Request $tron_create_trc10_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function tronCreateTrc10(\Tatum\Model\TronCreateTrc10Request $tron_create_trc10_request) { 
        // Resource path
        $resourcePath = "/v3/tron/trc10/deploy";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TransactionHash $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $tron_create_trc10_request
                ),
                "\Tatum\Model\TransactionHash"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TransactionHash",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Create a TRC-20 token
     *
     * @param \Tatum\Model\TronCreateTrc20Request $tron_create_trc20_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function tronCreateTrc20(\Tatum\Model\TronCreateTrc20Request $tron_create_trc20_request) { 
        // Resource path
        $resourcePath = "/v3/tron/trc20/deploy";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TransactionHash $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $tron_create_trc20_request
                ),
                "\Tatum\Model\TransactionHash"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TransactionHash",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Freeze the balance of a TRON account
     *
     * @param \Tatum\Model\TronFreezeRequest $tron_freeze_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function tronFreeze(\Tatum\Model\TronFreezeRequest $tron_freeze_request) { 
        // Resource path
        $resourcePath = "/v3/tron/freezeBalance";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TransactionHash $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $tron_freeze_request
                ),
                "\Tatum\Model\TransactionHash"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TransactionHash",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Generate a TRON address from the wallet's extended public key
     *
     * @param string $xpub The extended public key of the wallet; can be in the base58 format (111 characters) or the hexadecimal format (130 characters)
     * @param float $index Derivation index of desired address to be generated.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TronGenerateAddress200Response
     */
    public function tronGenerateAddress(string $xpub, float $index) { 
        if ($index < 0) {
            throw new InvalidArgumentException('Invalid value for "$index" when calling TronApi.tronGenerateAddress, must be bigger than or equal to 0.');
        }

        // Resource path
        $resourcePath = "/v3/tron/address/{xpub}/{index}";
        $resourcePath = str_replace("{" . "xpub" . "}", ObjectSerializer::toPathValue($xpub), $resourcePath);
        $resourcePath = str_replace("{" . "index" . "}", ObjectSerializer::toPathValue($index), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TronGenerateAddress200Response $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\TronGenerateAddress200Response"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TronGenerateAddress200Response",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Generate the private key for a TRON address
     *
     * @param \Tatum\Model\PrivKeyRequest $priv_key_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\PrivKey
     */
    public function tronGenerateAddressPrivateKey(\Tatum\Model\PrivKeyRequest $priv_key_request) { 
        // Resource path
        $resourcePath = "/v3/tron/wallet/priv";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\PrivKey $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $priv_key_request
                ),
                "\Tatum\Model\PrivKey"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\PrivKey",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get the TRON account by its address
     *
     * @param string $address Account address.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TronAccount
     */
    public function tronGetAccount(string $address) { 
        // Resource path
        $resourcePath = "/v3/tron/account/{address}";
        $resourcePath = str_replace("{" . "address" . "}", ObjectSerializer::toPathValue($address), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TronAccount $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\TronAccount"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TronAccount",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get a TRON block by its hash or height
     *
     * @param string $hash Block hash or height.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TronBlock
     */
    public function tronGetBlock(string $hash) { 
        // Resource path
        $resourcePath = "/v3/tron/block/{hash}";
        $resourcePath = str_replace("{" . "hash" . "}", ObjectSerializer::toPathValue($hash), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TronBlock $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\TronBlock"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TronBlock",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get the current TRON block
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TronGetCurrentBlock200Response
     */
    public function tronGetCurrentBlock() { 
        // Resource path
        $resourcePath = "/v3/tron/info";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TronGetCurrentBlock200Response $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\TronGetCurrentBlock200Response"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TronGetCurrentBlock200Response",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get a TRON transaction by its hash
     *
     * @param string $hash Transaction hash.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TronTx
     */
    public function tronGetTransaction(string $hash) { 
        // Resource path
        $resourcePath = "/v3/tron/transaction/{hash}";
        $resourcePath = str_replace("{" . "hash" . "}", ObjectSerializer::toPathValue($hash), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TronTx $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\TronTx"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TronTx",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Send TRX to a TRON account
     *
     * @param \Tatum\Model\TronTransferRequest $tron_transfer_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function tronTransfer(\Tatum\Model\TronTransferRequest $tron_transfer_request) { 
        // Resource path
        $resourcePath = "/v3/tron/transaction";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TransactionHash $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $tron_transfer_request
                ),
                "\Tatum\Model\TransactionHash"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TransactionHash",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Send TRC-10 tokens to a TRON account
     *
     * @param \Tatum\Model\TronTransferTrc10Request $tron_transfer_trc10_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function tronTransferTrc10(\Tatum\Model\TronTransferTrc10Request $tron_transfer_trc10_request) { 
        // Resource path
        $resourcePath = "/v3/tron/trc10/transaction";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TransactionHash $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $tron_transfer_trc10_request
                ),
                "\Tatum\Model\TransactionHash"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TransactionHash",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Send TRC-20 tokens to a TRON account
     *
     * @param \Tatum\Model\TronTransferTrc20Request $tron_transfer_trc20_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionHash
     */
    public function tronTransferTrc20(\Tatum\Model\TronTransferTrc20Request $tron_transfer_trc20_request) { 
        // Resource path
        $resourcePath = "/v3/tron/trc20/transaction";

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], ["application/json"])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TransactionHash $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "POST",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    $tron_transfer_trc20_request
                ),
                "\Tatum\Model\TransactionHash"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TransactionHash",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
    /**
     * Get information about a TRC-10 token
     *
     * @param string $id_or_owner_address The ID of the TRC-10 token or the address of the token&#39;s owner
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws InvalidArgumentException
     * 
     * @return \Tatum\Model\TronTrc10Detail
     */
    public function tronTrc10Detail(string $id_or_owner_address) { 
        // Resource path
        $resourcePath = "/v3/tron/trc10/detail/{idOrOwnerAddress}";
        $resourcePath = str_replace("{" . "idOrOwnerAddress" . "}", ObjectSerializer::toPathValue($id_or_owner_address), $resourcePath);

        // Prepare request headers
        $headers = [
            "User-Agent" => $this->_caller->config()->getUserAgent()
        ];

        // Set the API key
        if ($this->_caller->config()->getApiKey()) {
            $headers["x-api-key"] = $this->_caller->config()->getApiKey();
        }

        // Accept and content-type
        $headers = array_merge(
            $headers, 
            $this->_headerSelector->selectHeaders(["application/json"], [])
        );

        // Prepare the query parameters
        $queryParams = [];

        // Free Testnet call
        if (!isset($headers["x-api-key"]) && !$this->_caller->config()->isMainNet()) {
            $queryParams["type"] = "testnet";
        }

        try {
            /** @var \Tatum\Model\TronTrc10Detail $model */ $model = $this->_makeRequest(
                ObjectSerializer::createRequest(
                    "GET",
                    $this->_caller->config()->getHost() . $resourcePath,
                    $queryParams,
                    array_merge([], $headers),
                    [],
                    ""
                ),
                "\Tatum\Model\TronTrc10Detail"
            );
        } catch (ApiException $e) {
            $e->setResponseObject(
                ObjectSerializer::deserialize(
                    $e->getResponseBody() ?? "",
                    "\Tatum\Model\TronTrc10Detail",
                    $this->_caller->config()->getTempFolderPath(),
                    $e->getResponseHeaders()
                )
            );
            throw $e;
        }
        return $model;
    }
    
}
