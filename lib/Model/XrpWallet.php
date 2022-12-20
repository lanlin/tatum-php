<?php

/**
 * XrpWallet Model
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

use InvalidArgumentException as IAE;

/**
 * XrpWallet Model
 */
class XrpWallet extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpWallet";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "secret" => ["secret", "string", null, "getSecret", "setSecret"]
    ];

    /**
     * XrpWallet
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "secret"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if (is_null($this->_data['secret'])) {
            $ip[] = "'secret' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address Generated account address.
     * @return $this
     */
    public function setAddress(string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret(): string {
        return $this->_data["secret"];
    }

    /**
     * Set secret
     * 
     * @param string $secret Generated secret for account.
     * @return $this
     */
    public function setSecret(string $secret) {
        $this->_data['secret'] = $secret;

        return $this;
    }
}
