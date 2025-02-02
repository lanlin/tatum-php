<?php

/**
 * VetEstimateGas Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * VetEstimateGas Model
 */
class VetEstimateGas extends AbstractModel {

    public const _D = null;
    protected static $_name = "VetEstimateGas";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "xl" => 50]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "xl" => 50]], 
        "value" => ["value", "string", null, "getValue", "setValue", null, ["r" => 1, "xl" => 50]], 
        "data" => ["data", "string", null, "getData", "setData", null, ["r" => 0, "xl" => 10000]], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce", null, ["r" => 0]]
    ];

    /**
     * VetEstimateGas
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get from
     *
     * @return string|null
     */
    public function getFrom(): ?string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Sender account address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get to
     *
     * @return string|null
     */
    public function getTo(): ?string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to Recipient account address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(string $to) {
        return $this->_set("to", $to);
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
     * @param string $value Amount to send.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(string $value) {
        return $this->_set("value", $value);
    }

    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data Data to send to Smart Contract
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?string $data) {
        return $this->_set("data", $data);
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
     * @param float|null $nonce Nonce
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNonce(?float $nonce) {
        return $this->_set("nonce", $nonce);
    }
}
