<?php

/**
 * HmacWebHook Model
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
 * HmacWebHook Model
 */
class HmacWebHook extends AbstractModel {

    public const _D = null;
    protected static $_name = "HmacWebHook";
    protected static $_definition = [
        "hmac_secret" => ["hmacSecret", "string", null, "getHmacSecret", "setHmacSecret", null, ["r" => 1, "xl" => 100]]
    ];

    /**
     * HmacWebHook
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get hmac_secret
     *
     * @return string
     */
    public function getHmacSecret(): string {
        return $this->_data["hmac_secret"];
    }

    /**
     * Set hmac_secret
     * 
     * @param string $hmac_secret Your HMAC secret password, which is used for signing the webhook payload.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHmacSecret(string $hmac_secret) {
        return $this->_set("hmac_secret", $hmac_secret);
    }
}
