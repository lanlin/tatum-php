<?php

/**
 * MultiTokenGetTransactionByAddress_200_response_inner Model
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
 * MultiTokenGetTransactionByAddress_200_response_inner Model
 */
class MultiTokenGetTransactionByAddress200ResponseInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "MultiTokenGetTransactionByAddress_200_response_inner";
    protected static $_definition = [
        "block_number" => ["blockNumber", "float", null, "getBlockNumber", "setBlockNumber"], 
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "token_id" => ["tokenId", "string", null, "getTokenId", "setTokenId"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "operator" => ["operator", "string", null, "getOperator", "setOperator"], 
        "to" => ["to", "string", null, "getTo", "setTo"]
    ];

    /**
     * MultiTokenGetTransactionByAddress200ResponseInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["block_number"=>null, "tx_id"=>null, "contract_address"=>null, "token_id"=>null, "amount"=>null, "from"=>null, "operator"=>null, "to"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['block_number'])) {
            $ip[] = "'block_number' can't be null";
        }
        if (is_null($this->_data['tx_id'])) {
            $ip[] = "'tx_id' can't be null";
        }
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if (is_null($this->_data['token_id'])) {
            $ip[] = "'token_id' can't be null";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if (is_null($this->_data['operator'])) {
            $ip[] = "'operator' can't be null";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        
        return $ip;
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
     * @param float $block_number Block number
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
     * @param string $tx_id Transaction ID
     * @return $this
     */
    public function setTxId(string $tx_id) {
        $this->_data['tx_id'] = $tx_id;

        return $this;
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address Contract address
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        $this->_data['contract_address'] = $contract_address;

        return $this;
    }

    /**
     * Get token_id
     *
     * @return string
     */
    public function getTokenId(): string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string $token_id ID of the token
     * @return $this
     */
    public function setTokenId(string $token_id) {
        $this->_data['token_id'] = $token_id;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount(): string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount of tokens transferred.
     * @return $this
     */
    public function setAmount(string $amount) {
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom(): string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Sender
     * @return $this
     */
    public function setFrom(string $from) {
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get operator
     *
     * @return string
     */
    public function getOperator(): string {
        return $this->_data["operator"];
    }

    /**
     * Set operator
     * 
     * @param string $operator Operator
     * @return $this
     */
    public function setOperator(string $operator) {
        $this->_data['operator'] = $operator;

        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo(): string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to recipient
     * @return $this
     */
    public function setTo(string $to) {
        $this->_data['to'] = $to;

        return $this;
    }
}
