<?php

/**
 * XlmAccount_flags Model
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
 * XlmAccount_flags Model
 * 
 * @description Flags denote the enabling/disabling of certain asset issuer privileges.
 */
class XlmAccountFlags extends AbstractModel {

    public const _D = null;
    protected static $_name = "XlmAccount_flags";
    protected static $_definition = [
        "auth_required" => ["auth_required", "bool", null, "getAuthRequired", "setAuthRequired", null, ["r" => 0]], 
        "auth_revocable" => ["auth_revocable", "bool", null, "getAuthRevocable", "setAuthRevocable", null, ["r" => 0]], 
        "auth_immutable" => ["auth_immutable", "bool", null, "getAuthImmutable", "setAuthImmutable", null, ["r" => 0]]
    ];

    /**
     * XlmAccountFlags
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get auth_required
     *
     * @return bool|null
     */
    public function getAuthRequired(): ?bool {
        return $this->_data["auth_required"];
    }

    /**
     * Set auth_required
     * 
     * @param bool|null $auth_required If set to true, anyone who wants to hold an asset issued by this account must first be approved by this account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthRequired(?bool $auth_required) {
        return $this->_set("auth_required", $auth_required);
    }

    /**
     * Get auth_revocable
     *
     * @return bool|null
     */
    public function getAuthRevocable(): ?bool {
        return $this->_data["auth_revocable"];
    }

    /**
     * Set auth_revocable
     * 
     * @param bool|null $auth_revocable If set to true, this account can freeze the balance of a holder of an asset issued by this account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthRevocable(?bool $auth_revocable) {
        return $this->_set("auth_revocable", $auth_revocable);
    }

    /**
     * Get auth_immutable
     *
     * @return bool|null
     */
    public function getAuthImmutable(): ?bool {
        return $this->_data["auth_immutable"];
    }

    /**
     * Set auth_immutable
     * 
     * @param bool|null $auth_immutable If set to true, none of the following flags can be changed.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAuthImmutable(?bool $auth_immutable) {
        return $this->_set("auth_immutable", $auth_immutable);
    }
}
