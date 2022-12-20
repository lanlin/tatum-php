<?php

/**
 * TronTx Model
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
 * TronTx Model
 */
class TronTx extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TronTx";
    protected static $_definition = [
        "ret" => ["ret", "\Tatum\Model\TronTxRetInner[]", null, "getRet", "setRet"], 
        "signature" => ["signature", "string[]", null, "getSignature", "setSignature"], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber"], 
        "tx_id" => ["txID", "string", null, "getTxId", "setTxId"], 
        "net_usage" => ["netUsage", "float", null, "getNetUsage", "setNetUsage"], 
        "raw_data" => ["rawData", "\Tatum\Model\TronTxRawData", null, "getRawData", "setRawData"]
    ];

    /**
     * TronTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["ret"=>null, "signature"=>null, "block_number"=>null, "tx_id"=>null, "net_usage"=>null, "raw_data"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['ret'])) {
            $ip[] = "'ret' can't be null";
        }
        if (is_null($this->_data['signature'])) {
            $ip[] = "'signature' can't be null";
        }
        if (is_null($this->_data['block_number'])) {
            $ip[] = "'block_number' can't be null";
        }
        if (is_null($this->_data['tx_id'])) {
            $ip[] = "'tx_id' can't be null";
        }
        if (is_null($this->_data['raw_data'])) {
            $ip[] = "'raw_data' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get ret
     *
     * @return \Tatum\Model\TronTxRetInner[]
     */
    public function getRet(): array {
        return $this->_data["ret"];
    }

    /**
     * Set ret
     * 
     * @param \Tatum\Model\TronTxRetInner[] $ret Result of the smart contract invocation.
     * @return $this
     */
    public function setRet(array $ret) {
        $this->_data['ret'] = $ret;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string[]
     */
    public function getSignature(): array {
        return $this->_data["signature"];
    }

    /**
     * Set signature
     * 
     * @param string[] $signature List of signatures of the transaction.
     * @return $this
     */
    public function setSignature(array $signature) {
        $this->_data['signature'] = $signature;

        return $this;
    }

    /**
     * Get block_number
     *
     * @return float
     */
    public function getBlockNumber(): float {
        return $this->_data["block_number"];
    }

    /**
     * Set block_number
     * 
     * @param float $block_number The block in which the transaction was included.
     * @return $this
     */
    public function setBlockNumber(float $block_number) {
        $this->_data['block_number'] = $block_number;

        return $this;
    }

    /**
     * Get tx_id
     *
     * @return string
     */
    public function getTxId(): string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id Transaction ID.
     * @return $this
     */
    public function setTxId(string $tx_id) {
        $this->_data['tx_id'] = $tx_id;

        return $this;
    }

    /**
     * Get net_usage
     *
     * @return float|null
     */
    public function getNetUsage(): ?float {
        return $this->_data["net_usage"];
    }

    /**
     * Set net_usage
     * 
     * @param float|null $net_usage Usage of the network.
     * @return $this
     */
    public function setNetUsage(?float $net_usage) {
        $this->_data['net_usage'] = $net_usage;

        return $this;
    }

    /**
     * Get raw_data
     *
     * @return \Tatum\Model\TronTxRawData
     */
    public function getRawData(): \Tatum\Model\TronTxRawData {
        return $this->_data["raw_data"];
    }

    /**
     * Set raw_data
     * 
     * @param \Tatum\Model\TronTxRawData $raw_data raw_data
     * @return $this
     */
    public function setRawData(\Tatum\Model\TronTxRawData $raw_data) {
        $this->_data['raw_data'] = $raw_data;

        return $this;
    }
}
