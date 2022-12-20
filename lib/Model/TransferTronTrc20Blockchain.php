<?php

/**
 * TransferTronTrc20Blockchain Model
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
 * TransferTronTrc20Blockchain Model
 */
class TransferTronTrc20Blockchain extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferTronTrc20Blockchain";
    protected static $_definition = [
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "token_address" => ["tokenAddress", "string", null, "getTokenAddress", "setTokenAddress"], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"]
    ];

    /**
     * TransferTronTrc20Blockchain
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from_private_key"=>null, "to"=>null, "token_address"=>null, "fee_limit"=>null, "amount"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 64)) {
            $ip[] = "'from_private_key' length must be <= 64";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 64)) {
            $ip[] = "'from_private_key' length must be >= 64";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 34)) {
            $ip[] = "'to' length must be <= 34";
        }
        if ((mb_strlen($this->_data['to']) < 34)) {
            $ip[] = "'to' length must be >= 34";
        }
        if (is_null($this->_data['token_address'])) {
            $ip[] = "'token_address' can't be null";
        }
        if ((mb_strlen($this->_data['token_address']) > 34)) {
            $ip[] = "'token_address' length must be <= 34";
        }
        if ((mb_strlen($this->_data['token_address']) < 34)) {
            $ip[] = "'token_address' length must be >= 34";
        }
        if (is_null($this->_data['fee_limit'])) {
            $ip[] = "'fee_limit' can't be null";
        }
        if (($this->_data['fee_limit'] < 0)) {
            $ip[] = "'fee_limit' must be >= 0";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        
        return $ip;
    }

    /**
     * Get from_private_key
     *
     * @return string
     */
    public function getFromPrivateKey(): string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of the address, from which the TRX will be sent.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 64)) {
            throw new IAE('TransferTronTrc20Blockchain.setFromPrivateKey: $from_private_key length must be <= 64');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('TransferTronTrc20Blockchain.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

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
     * @param string $to Recipient address of TRON account in Base58 format.
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 34)) {
            throw new IAE('TransferTronTrc20Blockchain.setTo: $to length must be <= 34');
        }
        if ((mb_strlen($to) < 34)) {
            throw new IAE('TransferTronTrc20Blockchain.setTo: $to length must be >= 34');
        }
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get token_address
     *
     * @return string
     */
    public function getTokenAddress(): string {
        return $this->_data["token_address"];
    }

    /**
     * Set token_address
     * 
     * @param string $token_address Address of the TRC20 token to transfer.
     * @return $this
     */
    public function setTokenAddress(string $token_address) {
        if ((mb_strlen($token_address) > 34)) {
            throw new IAE('TransferTronTrc20Blockchain.setTokenAddress: $token_address length must be <= 34');
        }
        if ((mb_strlen($token_address) < 34)) {
            throw new IAE('TransferTronTrc20Blockchain.setTokenAddress: $token_address length must be >= 34');
        }
        $this->_data['token_address'] = $token_address;

        return $this;
    }

    /**
     * Get fee_limit
     *
     * @return float
     */
    public function getFeeLimit(): float {
        return $this->_data["fee_limit"];
    }

    /**
     * Set fee_limit
     * 
     * @param float $fee_limit Fee in TRX to be paid.
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        if (($fee_limit < 0)) {
            throw new IAE('TransferTronTrc20Blockchain.setFeeLimit: $fee_limit must be >=0');
        }
        $this->_data['fee_limit'] = $fee_limit;

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
     * @param string $amount Amount to be sent in TRX.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('TransferTronTrc20Blockchain.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }
}
