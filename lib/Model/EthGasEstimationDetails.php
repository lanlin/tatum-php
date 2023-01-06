<?php

/**
 * EthGasEstimationDetails Model
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
 * EthGasEstimationDetails Model
 * 
 * @description Detailed estimations for safe (under 30 minutes), standard (under 5 minutes) and fast (under 2 minutes) transaction times.
 */
class EthGasEstimationDetails extends AbstractModel {

    public const _D = null;
    protected static $_name = "EthGasEstimationDetails";
    protected static $_definition = [
        "safe" => ["safe", "string", null, "getSafe", "setSafe", null, ["r" => 1]], 
        "standard" => ["standard", "string", null, "getStandard", "setStandard", null, ["r" => 1]], 
        "fast" => ["fast", "string", null, "getFast", "setFast", null, ["r" => 1]], 
        "base_fee" => ["baseFee", "string", null, "getBaseFee", "setBaseFee", null, ["r" => 1]]
    ];

    /**
     * EthGasEstimationDetails
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get safe
     *
     * @return string
     */
    public function getSafe(): string {
        return $this->_data["safe"];
    }

    /**
     * Set safe
     * 
     * @param string $safe Safe gas price in wei.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSafe(string $safe) {
        return $this->_set("safe", $safe);
    }

    /**
     * Get standard
     *
     * @return string
     */
    public function getStandard(): string {
        return $this->_data["standard"];
    }

    /**
     * Set standard
     * 
     * @param string $standard Standard gas price in wei.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStandard(string $standard) {
        return $this->_set("standard", $standard);
    }

    /**
     * Get fast
     *
     * @return string
     */
    public function getFast(): string {
        return $this->_data["fast"];
    }

    /**
     * Set fast
     * 
     * @param string $fast Fast gas price in wei.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFast(string $fast) {
        return $this->_set("fast", $fast);
    }

    /**
     * Get base_fee
     *
     * @return string
     */
    public function getBaseFee(): string {
        return $this->_data["base_fee"];
    }

    /**
     * Set base_fee
     * 
     * @param string $base_fee Base fee for EIP-1559 transactions in wei.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBaseFee(string $base_fee) {
        return $this->_set("base_fee", $base_fee);
    }
}
