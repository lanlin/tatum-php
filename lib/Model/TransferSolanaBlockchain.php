<?php

/**
 * TransferSolanaBlockchain Model
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
 * TransferSolanaBlockchain Model
 */
class TransferSolanaBlockchain extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "TransferSolanaBlockchain";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "fee_payer" => ["feePayer", "string", null, "getFeePayer", "setFeePayer"], 
        "fee_payer_private_key" => ["feePayerPrivateKey", "string", null, "getFeePayerPrivateKey", "setFeePayerPrivateKey"]
    ];

    /**
     * TransferSolanaBlockchain
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from"=>null, "to"=>null, "amount"=>null, "from_private_key"=>null, "fee_payer"=>null, "fee_payer_private_key"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 44)) {
            $ip[] = "'from' length must be <= 44";
        }
        if ((mb_strlen($this->_data['from']) < 44)) {
            $ip[] = "'from' length must be >= 44";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 44)) {
            $ip[] = "'to' length must be <= 44";
        }
        if ((mb_strlen($this->_data['to']) < 44)) {
            $ip[] = "'to' length must be >= 44";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 128)) {
            $ip[] = "'from_private_key' length must be <= 128";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 87)) {
            $ip[] = "'from_private_key' length must be >= 87";
        }
        if (!is_null($this->_data['fee_payer']) && (mb_strlen($this->_data['fee_payer']) > 44)) {
            $ip[] = "'fee_payer' length must be <= 44";
        }
        if (!is_null($this->_data['fee_payer']) && (mb_strlen($this->_data['fee_payer']) < 43)) {
            $ip[] = "'fee_payer' length must be >= 43";
        }
        if (!is_null($this->_data['fee_payer_private_key']) && (mb_strlen($this->_data['fee_payer_private_key']) > 87)) {
            $ip[] = "'fee_payer_private_key' length must be <= 87";
        }
        if (!is_null($this->_data['fee_payer_private_key']) && (mb_strlen($this->_data['fee_payer_private_key']) < 128)) {
            $ip[] = "'fee_payer_private_key' length must be >= 128";
        }
        
        return $ip;
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
     * @param string $from Blockchain address to send assets from
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 44)) {
            throw new IAE('TransferSolanaBlockchain.setFrom: $from length must be <= 44');
        }
        if ((mb_strlen($from) < 44)) {
            throw new IAE('TransferSolanaBlockchain.setFrom: $from length must be >= 44');
        }
        $this->_data['from'] = $from;

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
     * @param string $to Blockchain address to send assets to
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 44)) {
            throw new IAE('TransferSolanaBlockchain.setTo: $to length must be <= 44');
        }
        if ((mb_strlen($to) < 44)) {
            throw new IAE('TransferSolanaBlockchain.setTo: $to length must be >= 44');
        }
        $this->_data['to'] = $to;

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
     * @param string $amount Amount to be sent in SOL.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('TransferSolanaBlockchain.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
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
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 128)) {
            throw new IAE('TransferSolanaBlockchain.setFromPrivateKey: $from_private_key length must be <= 128');
        }
        if ((mb_strlen($from_private_key) < 87)) {
            throw new IAE('TransferSolanaBlockchain.setFromPrivateKey: $from_private_key length must be >= 87');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get fee_payer
     *
     * @return string|null
     */
    public function getFeePayer(): ?string {
        return $this->_data["fee_payer"];
    }

    /**
     * Set fee_payer
     * 
     * @param string|null $fee_payer Address on the Solana blockchain, from which the fee will be paid for transaction. Defaults to from.
     * @return $this
     */
    public function setFeePayer(?string $fee_payer) {
        if (!is_null($fee_payer) && (mb_strlen($fee_payer) > 44)) {
            throw new IAE('TransferSolanaBlockchain.setFeePayer: $fee_payer length must be <= 44');
        }
        if (!is_null($fee_payer) && (mb_strlen($fee_payer) < 43)) {
            throw new IAE('TransferSolanaBlockchain.setFeePayer: $fee_payer length must be >= 43');
        }
        $this->_data['fee_payer'] = $fee_payer;

        return $this;
    }

    /**
     * Get fee_payer_private_key
     *
     * @return string|null
     */
    public function getFeePayerPrivateKey(): ?string {
        return $this->_data["fee_payer_private_key"];
    }

    /**
     * Set fee_payer_private_key
     * 
     * @param string|null $fee_payer_private_key Private key of the fee payer address.
     * @return $this
     */
    public function setFeePayerPrivateKey(?string $fee_payer_private_key) {
        if (!is_null($fee_payer_private_key) && (mb_strlen($fee_payer_private_key) > 87)) {
            throw new IAE('TransferSolanaBlockchain.setFeePayerPrivateKey: $fee_payer_private_key length must be <= 87');
        }
        if (!is_null($fee_payer_private_key) && (mb_strlen($fee_payer_private_key) < 128)) {
            throw new IAE('TransferSolanaBlockchain.setFeePayerPrivateKey: $fee_payer_private_key length must be >= 128');
        }
        $this->_data['fee_payer_private_key'] = $fee_payer_private_key;

        return $this;
    }
}
