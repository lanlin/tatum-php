<?php

/**
 * TronAccount_trc10_inner Model
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
 * TronAccount_trc10_inner Model
 * 
 * @description Balance of the TRC10 assets.
 */
class TronAccountTrc10Inner extends AbstractModel {

    public const _D = null;
    protected static $_name = "TronAccount_trc10_inner";
    protected static $_definition = [
        "key" => ["key", "string", null, "getKey", "setKey", null, ["r" => 1]], 
        "value" => ["value", "float", null, "getValue", "setValue", null, ["r" => 1]]
    ];

    /**
     * TronAccountTrc10Inner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get key
     *
     * @return string
     */
    public function getKey(): string {
        return $this->_data["key"];
    }

    /**
     * Set key
     * 
     * @param string $key Name of the TRC10 asset.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setKey(string $key) {
        return $this->_set("key", $key);
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue(): float {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param float $value Balance of the TRC10 asset.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setValue(float $value) {
        return $this->_set("value", $value);
    }
}
