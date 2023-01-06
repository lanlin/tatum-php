<?php

/**
 * InvalidGasPumpAddress Model
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
 * InvalidGasPumpAddress Model
 */
class InvalidGasPumpAddress extends AbstractModel {

    public const _D = null;
    protected static $_name = "InvalidGasPumpAddress";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 0]], 
        "reason" => ["reason", "string", null, "getReason", "setReason", null, ["r" => 0]]
    ];

    /**
     * InvalidGasPumpAddress
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string|null $address The not activated gas pump address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(?string $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get reason
     *
     * @return string|null
     */
    public function getReason(): ?string {
        return $this->_data["reason"];
    }

    /**
     * Set reason
     * 
     * @param string|null $reason The reason why the gas pump address did not get activated
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReason(?string $reason) {
        return $this->_set("reason", $reason);
    }
}
