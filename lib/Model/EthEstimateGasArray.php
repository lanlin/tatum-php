<?php

/**
 * EthEstimateGasArray Model
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
 * EthEstimateGasArray Model
 */
class EthEstimateGasArray extends AbstractModel {

    public const _D = null;
    protected static $_name = "EthEstimateGasArray";
    protected static $_definition = [
        "estimations" => ["estimations", "\Tatum\Model\EthEstimateGas[]", null, "getEstimations", "setEstimations", null, ["r" => 1, "c" => 1]]
    ];

    /**
     * EthEstimateGasArray
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get estimations
     *
     * @return array|null
     */
    public function getEstimations(): ?array {
        return $this->_data["estimations"];
    }

    /**
     * Set estimations
     * 
     * @param \Tatum\Model\EthEstimateGas[] $estimations estimations
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEstimations(array $estimations) {
        return $this->_set("estimations", $estimations);
    }
}
