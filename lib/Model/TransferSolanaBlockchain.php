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
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * TransferSolanaBlockchain Model
 */
class TransferSolanaBlockchain extends AbstractModel {

    public const _D = null;
    protected static $_name = "TransferSolanaBlockchain";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 44, "xl" => 44]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 44, "xl" => 44]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 87, "xl" => 128]], 
        "fee_payer" => ["feePayer", "string", null, "getFeePayer", "setFeePayer", null, ["r" => 0, "nl" => 43, "xl" => 44]], 
        "fee_payer_private_key" => ["feePayerPrivateKey", "string", null, "getFeePayerPrivateKey", "setFeePayerPrivateKey", null, ["r" => 0, "nl" => 128, "xl" => 87]]
    ];

    /**
     * TransferSolanaBlockchain
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get from
     *
     * @return string|null
     */
    public function getFrom(): ?string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from Blockchain address to send assets from
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get to
     *
     * @return string|null
     */
    public function getTo(): ?string {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param string $to Blockchain address to send assets to
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(string $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string $amount Amount to be sent in SOL.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get from_private_key
     *
     * @return string|null
     */
    public function getFromPrivateKey(): ?string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeePayer(?string $fee_payer) {
        return $this->_set("fee_payer", $fee_payer);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeePayerPrivateKey(?string $fee_payer_private_key) {
        return $this->_set("fee_payer_private_key", $fee_payer_private_key);
    }
}
