<?php

/**
 * KlaytnTx_logs_inner Model
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
 * KlaytnTx_logs_inner Model
 */
class KlaytnTxLogsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "KlaytnTx_logs_inner";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "topics" => ["topics", "string[]", null, "getTopics", "setTopics"], 
        "data" => ["data", "string", null, "getData", "setData"], 
        "log_index" => ["logIndex", "float", null, "getLogIndex", "setLogIndex"], 
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber"], 
        "block_hash" => ["blockHash", "string", null, "getBlockHash", "setBlockHash"], 
        "transaction_index" => ["transactionIndex", "float", null, "getTransactionIndex", "setTransactionIndex"], 
        "transaction_hash" => ["transactionHash", "string", null, "getTransactionHash", "setTransactionHash"]
    ];

    /**
     * KlaytnTxLogsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "topics"=>null, "data"=>null, "log_index"=>null, "block_number"=>null, "block_hash"=>null, "transaction_index"=>null, "transaction_hash"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }

    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address From which this event originated from.
     * @return $this
     */
    public function setAddress(?string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get topics
     *
     * @return string[]|null
     */
    public function getTopics(): ?array {
        return $this->_data["topics"];
    }

    /**
     * Set topics
     * 
     * @param string[]|null $topics An array with max 4 32 Byte topics, topic 1-3 contains indexed parameters of the log.
     * @return $this
     */
    public function setTopics(?array $topics) {
        $this->_data['topics'] = $topics;

        return $this;
    }

    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data The data containing non-indexed log parameter.
     * @return $this
     */
    public function setData(?string $data) {
        $this->_data['data'] = $data;

        return $this;
    }

    /**
     * Get log_index
     *
     * @return float|null
     */
    public function getLogIndex(): ?float {
        return $this->_data["log_index"];
    }

    /**
     * Set log_index
     * 
     * @param float|null $log_index Integer of the event index position in the block.
     * @return $this
     */
    public function setLogIndex(?float $log_index) {
        $this->_data['log_index'] = $log_index;

        return $this;
    }

    /**
     * Get block_number
     *
     * @return float|null
     */
    public function getBlockNumber(): ?float {
        return $this->_data["block_number"];
    }

    /**
     * Set block_number
     * 
     * @param float|null $block_number Block number where this transaction was in.
     * @return $this
     */
    public function setBlockNumber(?float $block_number) {
        $this->_data['block_number'] = $block_number;

        return $this;
    }

    /**
     * Get block_hash
     *
     * @return string|null
     */
    public function getBlockHash(): ?string {
        return $this->_data["block_hash"];
    }

    /**
     * Set block_hash
     * 
     * @param string|null $block_hash Hash of the block.
     * @return $this
     */
    public function setBlockHash(?string $block_hash) {
        $this->_data['block_hash'] = $block_hash;

        return $this;
    }

    /**
     * Get transaction_index
     *
     * @return float|null
     */
    public function getTransactionIndex(): ?float {
        return $this->_data["transaction_index"];
    }

    /**
     * Set transaction_index
     * 
     * @param float|null $transaction_index Integer of the transaction’s index position, the event was created in.
     * @return $this
     */
    public function setTransactionIndex(?float $transaction_index) {
        $this->_data['transaction_index'] = $transaction_index;

        return $this;
    }

    /**
     * Get transaction_hash
     *
     * @return string|null
     */
    public function getTransactionHash(): ?string {
        return $this->_data["transaction_hash"];
    }

    /**
     * Set transaction_hash
     * 
     * @param string|null $transaction_hash Hash of the transaction this event was created in.
     * @return $this
     */
    public function setTransactionHash(?string $transaction_hash) {
        $this->_data['transaction_hash'] = $transaction_hash;

        return $this;
    }
}
