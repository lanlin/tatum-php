<?php

/**
 * NftGetBalanceScAlgo Model
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
 * NftGetBalanceScAlgo Model
 */
class NftGetBalanceScAlgo extends AbstractModel {

    public const _D = null;
    protected static $_name = "NftGetBalanceScAlgo";
    protected static $_definition = [
        "data" => ["data", "\Tatum\Model\NftGetBalanceScAlgoDataInner[]", null, "getData", "setData", null, ["r" => 0, "c" => 1]]
    ];

    /**
     * NftGetBalanceScAlgo
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get data
     *
     * @return \Tatum\Model\NftGetBalanceScAlgoDataInner[]|null
     */
    public function getData(): ?array {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Tatum\Model\NftGetBalanceScAlgoDataInner[]|null $data data
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(?array $data) {
        return $this->_set("data", $data);
    }
}
