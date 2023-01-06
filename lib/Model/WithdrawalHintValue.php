<?php

/**
 * WithdrawalHint_value Model
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
 * WithdrawalHint_value Model
 */
class WithdrawalHintValue extends AbstractModel {

    public const _D = null;
    protected static $_name = "WithdrawalHint_value";
    protected static $_definition = [
        "address" => ["address", "\Tatum\Model\Address", null, "getAddress", "setAddress", null, ["r" => 0]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 0]]
    ];

    /**
     * WithdrawalHintValue
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
     * @return \Tatum\Model\Address|null
     */
    public function getAddress(): ?\Tatum\Model\Address {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param \Tatum\Model\Address|null $address address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(?\Tatum\Model\Address $address) {
        return $this->_set("address", $address);
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string|null $amount Balance for address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(?string $amount) {
        return $this->_set("amount", $amount);
    }
}
