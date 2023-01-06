<?php

/**
 * LtcTx_outputs_inner Model
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
 * LtcTx_outputs_inner Model
 */
class LtcTxOutputsInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "LtcTx_outputs_inner";
    protected static $_definition = [
        "value" => ["value", "string", null, "getValue", "setValue", null, ["r" => 0]], 
        "script" => ["script", "string", null, "getScript", "setScript", null, ["r" => 0]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 0]]
    ];

    /**
     * LtcTxOutputsInner
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
     * @param string|null $value Sent amount in LTC.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(?string $value) {
        return $this->_set("value", $value);
    }

    /**
     * Get script
     *
     * @return string|null
     */
    public function getScript(): ?string {
        return $this->_data["script"];
    }

    /**
     * Set script
     * 
     * @param string|null $script Transaction script.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setScript(?string $script) {
        return $this->_set("script", $script);
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
