<?php

/**
 * AdaUTXO Model
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
 * AdaUTXO Model
 */
class AdaUTXO extends AbstractModel {

    public const _D = null;
    protected static $_name = "AdaUTXO";
    protected static $_definition = [
        "value" => ["value", "string", null, "getValue", "setValue", null, ["r" => 0]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0]], 
        "tx_hash" => ["txHash", "string", null, "getTxHash", "setTxHash", null, ["r" => 0]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 0]]
    ];

    /**
     * AdaUTXO
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value Sent amount in Lovelace - 1/1000000 of ADA.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(?string $value) {
        return $this->_set("value", $value);
    }

    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index Index of the output in the transaction.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(?float $index) {
        return $this->_set("index", $index);
    }

    /**
     * Get tx_hash
     *
     * @return string|null
     */
    public function getTxHash(): ?string {
        return $this->_data["tx_hash"];
    }

    /**
     * Set tx_hash
     * 
     * @param string|null $tx_hash Transaction hash.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxHash(?string $tx_hash) {
        return $this->_set("tx_hash", $tx_hash);
    }

    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address Recipient address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(?string $address) {
        return $this->_set("address", $address);
    }
}
