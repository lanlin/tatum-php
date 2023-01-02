<?php

/**
 * Implementation of BlockchainAddresses API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @see       https://apidoc.tatum.io/tag/BlockchainAddresses
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * BlockchainAddresses API
 */
class BlockchainAddressesApi extends AbstractApi {
    /**
     * Check whether a blockchain address is assigned to a virtual account
     *
     * @param string $currency The cryptocurrency of the blockchain address to check
     * @param string $address The blockchain address to check
     * @param float|null $index In case of XLM or XRP, this is a memo or DestinationTag to search for.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account
     */
    public function addressExists(string $currency, string $address, float $index = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Account $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/offchain/account/address/{address}/{currency}", ["currency" => $currency, "address" => $address]), [
                    "index" => isset($index) ? S::toQueryValue($index) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Account"
        );
            
        return $result;
    }
    
    /**
     * Assign a blockchain address to a virtual account
     *
     * @param string $id The ID of the virtual account to assign a blockchain address to
     * @param string $address The blockchain address to assign to the virtual account
     * @param float|null $index Destination tag or memo attribute for XRP or XLM addresses
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Address
     */
    public function assignAddress(string $id, string $address, float $index = null) {
        if (isset($index) && $index < 1) {
            throw new IAE('Invalid value for "$index" when calling BlockchainAddressesApi.assignAddress, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Address $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/offchain/account/{id}/address/{address}", ["id" => $id, "address" => $address]), [
                    "index" => isset($index) ? S::toQueryValue($index) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Address"
        );
            
        return $result;
    }
    
    /**
     * Create a deposit address for a virtual account
     *
     * @param string $id Account ID
     * @param float|null $index &lt;p&gt;Derivation path index for specific address. If not present, last used index for given xpub of account + 1 is used. We recommend not to pass this value manually, since when some of the indexes are skipped, it is not possible to use them lately to generate address from it.&lt;/p&gt;
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Address
     */
    public function generateDepositAddress(string $id, float $index = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Address $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/offchain/account/{id}/address", ["id" => $id]), [
                    "index" => isset($index) ? S::toQueryValue($index) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Address"
        );
            
        return $result;
    }
    
    /**
     * Create multiple deposit addresses for a virtual account
     *
     * @param \Tatum\Model\OffchainAddresses $offchain_addresses 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Address[]
     */
    public function generateDepositAddressesBatch(\Tatum\Model\OffchainAddresses $offchain_addresses) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Address[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/offchain/account/address/batch", [], $rHeaders, [], $offchain_addresses
            ), 
            "\Tatum\Model\Address[]"
        );
            
        return $result;
    }
    
    /**
     * Get all deposit addresses for a virtual account
     *
     * @param string $id The ID of the virtual account to get deposit addresses for
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Address[]
     */
    public function getAllDepositAddresses(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Address[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/offchain/account/{id}/address", ["id" => $id]), [], $rHeaders, []
            ), 
            "\Tatum\Model\Address[]"
        );
            
        return $result;
    }
    
    /**
     * Remove a deposit address from a virtual account
     *
     * @param string $id Account ID
     * @param string $address Blockchain address
     * @param float|null $index Destination tag or memo attribute for XRP, BNB or XLM addresses
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function removeAddress(string $id, string $address, float $index = null) {
        if (isset($index) && $index < 1) {
            throw new IAE('Invalid value for "$index" when calling BlockchainAddressesApi.removeAddress, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "DELETE", S::parse("/v3/offchain/account/{id}/address/{address}", ["id" => $id, "address" => $address]), [
                    "index" => isset($index) ? S::toQueryValue($index) : null,
                ], $rHeaders, []
            )
        );
    }
    
}
