<?php

/**
 * MultiTokenGetAddressBalance_200_response_inner Model
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
!defined("TATUM-SDK") && exit();

/**
 * MultiTokenGetAddressBalance_200_response_inner Model
 */
class MultiTokenGetAddressBalance200ResponseInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "MultiTokenGetAddressBalance_200_response_inner";
    protected static $_definition = [
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 0]], 
        "balances" => ["balances", "\Tatum\Model\MultiTokenGetAddressBalance200ResponseInnerBalancesInner[]", null, "getBalances", "setBalances", null, ["r" => 0, "c" => 1]], 
        "metadata" => ["metadata", "\Tatum\Model\MultiTokenGetAddressBalance200ResponseInnerMetadataInner[]", null, "getMetadata", "setMetadata", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * MultiTokenGetAddressBalance200ResponseInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get contract_address
     *
     * @return string|null
     */
    public function getContractAddress(): ?string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string|null $contract_address Contract address of the Multi Token
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(?string $contract_address) {
        return $this->_set("contract_address", $contract_address);
    }

    /**
     * Get balances
     *
     * @return \Tatum\Model\MultiTokenGetAddressBalance200ResponseInnerBalancesInner[]|null
     */
    public function getBalances(): ?array {
        return $this->_data["balances"];
    }

    /**
     * Set balances
     * 
     * @param \Tatum\Model\MultiTokenGetAddressBalance200ResponseInnerBalancesInner[]|null $balances balances
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBalances(?array $balances) {
        return $this->_set("balances", $balances);
    }

    /**
     * Get metadata
     *
     * @return \Tatum\Model\MultiTokenGetAddressBalance200ResponseInnerMetadataInner[]|null
     */
    public function getMetadata(): ?array {
        return $this->_data["metadata"];
    }

    /**
     * Set metadata
     * 
     * @param \Tatum\Model\MultiTokenGetAddressBalance200ResponseInnerMetadataInner[]|null $metadata metadata
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMetadata(?array $metadata) {
        return $this->_set("metadata", $metadata);
    }
}
