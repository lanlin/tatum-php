<?php

/**
 * EthGasEstimationBatchResultData Model
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
 * EthGasEstimationBatchResultData Model
 */
class EthGasEstimationBatchResultData extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "EthGasEstimationBatchResultData";
    protected static $_definition = [
        "gas_limit" => ["gasLimit", "string", null, "getGasLimit", "setGasLimit"], 
        "gas_price" => ["gasPrice", "string", null, "getGasPrice", "setGasPrice"], 
        "estimations" => ["estimations", "\Tatum\Model\EthGasEstimationDetails", null, "getEstimations", "setEstimations"]
    ];

    /**
     * EthGasEstimationBatchResultData
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["gas_limit"=>null, "gas_price"=>null, "estimations"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['gas_limit'])) {
            $ip[] = "'gas_limit' can't be null";
        }
        if (is_null($this->_data['gas_price'])) {
            $ip[] = "'gas_price' can't be null";
        }
        if (is_null($this->_data['estimations'])) {
            $ip[] = "'estimations' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get gas_limit
     *
     * @return string
     */
    public function getGasLimit(): string {
        return $this->_data["gas_limit"];
    }

    /**
     * Set gas_limit
     * 
     * @param string $gas_limit Gas limit for transaction in gas price.
     * @return $this
     */
    public function setGasLimit(string $gas_limit) {
        $this->_data['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Get gas_price
     *
     * @return string
     */
    public function getGasPrice(): string {
        return $this->_data["gas_price"];
    }

    /**
     * Set gas_price
     * 
     * @param string $gas_price Gas price in wei.
     * @return $this
     */
    public function setGasPrice(string $gas_price) {
        $this->_data['gas_price'] = $gas_price;

        return $this;
    }

    /**
     * Get estimations
     *
     * @return \Tatum\Model\EthGasEstimationDetails
     */
    public function getEstimations(): \Tatum\Model\EthGasEstimationDetails {
        return $this->_data["estimations"];
    }

    /**
     * Set estimations
     * 
     * @param \Tatum\Model\EthGasEstimationDetails $estimations estimations
     * @return $this
     */
    public function setEstimations(\Tatum\Model\EthGasEstimationDetails $estimations) {
        $this->_data['estimations'] = $estimations;

        return $this;
    }
}
