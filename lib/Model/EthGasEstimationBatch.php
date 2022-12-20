<?php

/**
 * EthGasEstimationBatch Model
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
 * EthGasEstimationBatch Model
 */
class EthGasEstimationBatch extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "EthGasEstimationBatch";
    protected static $_definition = [
        "error" => ["error", "bool", null, "getError", "setError"], 
        "result" => ["result", "\Tatum\Model\EthGasEstimationBatchResult[]", null, "getResult", "setResult"]
    ];

    /**
     * EthGasEstimationBatch
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["error"=>null, "result"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['error'])) {
            $ip[] = "'error' can't be null";
        }
        if (is_null($this->_data['result'])) {
            $ip[] = "'result' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get error
     *
     * @return bool
     */
    public function getError(): bool {
        return $this->_data["error"];
    }

    /**
     * Set error
     * 
     * @param bool $error If all estimations succeeded.
     * @return $this
     */
    public function setError(bool $error) {
        $this->_data['error'] = $error;

        return $this;
    }

    /**
     * Get result
     *
     * @return \Tatum\Model\EthGasEstimationBatchResult[]
     */
    public function getResult(): array {
        return $this->_data["result"];
    }

    /**
     * Set result
     * 
     * @param \Tatum\Model\EthGasEstimationBatchResult[] $result result
     * @return $this
     */
    public function setResult(array $result) {
        $this->_data['result'] = $result;

        return $this;
    }
}
