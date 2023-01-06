<?php

/**
 * TronTx_ret_inner Model
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
 * TronTx_ret_inner Model
 */
class TronTxRetInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "TronTx_ret_inner";
    protected static $_definition = [
        "contract_ret" => ["contractRet", "string", null, "getContractRet", "setContractRet", null, ["r" => 0]]
    ];

    /**
     * TronTxRetInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get contract_ret
     *
     * @return string|null
     */
    public function getContractRet(): ?string {
        return $this->_data["contract_ret"];
    }

    /**
     * Set contract_ret
     * 
     * @param string|null $contract_ret Returns the value of the smart contract invocation.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractRet(?string $contract_ret) {
        return $this->_set("contract_ret", $contract_ret);
    }
}
