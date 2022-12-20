<?php

/**
 * WithdrawalObject Model
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
 * WithdrawalObject Model
 */
class WithdrawalObject extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const STATUS_IN_PROGRESS = 'InProgress';
    public const STATUS_DONE = 'Done';
    public const STATUS_CANCELLED = 'Cancelled';
    protected static $_name = "WithdrawalObject";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId"], 
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId"], 
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId"], 
        "status" => ["status", "string", null, "getStatus", "setStatus"], 
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "reference" => ["reference", "string", null, "getReference", "setReference"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "attr" => ["attr", "string", null, "getAttr", "setAttr"], 
        "fee" => ["fee", "string", null, "getFee", "setFee"], 
        "multiple_amounts" => ["multipleAmounts", "string[]", null, "getMultipleAmounts", "setMultipleAmounts"], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId"], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote"]
    ];

    /**
     * WithdrawalObject
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["id"=>null, "tx_id"=>null, "account_id"=>null, "status"=>null, "address"=>null, "reference"=>null, "amount"=>null, "attr"=>null, "fee"=>null, "multiple_amounts"=>null, "payment_id"=>null, "sender_note"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['id'])) {
            $ip[] = "'id' can't be null";
        }
        if (is_null($this->_data['account_id'])) {
            $ip[] = "'account_id' can't be null";
        }
        $allowed = $this->getStatusAllowableValues();
        $value = $this->_data['status'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'status' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if ((mb_strlen($this->_data['address']) > 10000)) {
            $ip[] = "'address' length must be <= 10000";
        }
        if ((mb_strlen($this->_data['address']) < 1)) {
            $ip[] = "'address' length must be >= 1";
        }
        if (is_null($this->_data['reference'])) {
            $ip[] = "'reference' can't be null";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if ((mb_strlen($this->_data['amount']) > 38)) {
            $ip[] = "'amount' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (!is_null($this->_data['attr']) && (mb_strlen($this->_data['attr']) > 64)) {
            $ip[] = "'attr' length must be <= 64";
        }
        if (!is_null($this->_data['attr']) && (mb_strlen($this->_data['attr']) < 1)) {
            $ip[] = "'attr' length must be >= 1";
        }
        if (is_null($this->_data['fee'])) {
            $ip[] = "'fee' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['fee'])) {
            $ip[] = "'fee' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) > 100)) {
            $ip[] = "'payment_id' length must be <= 100";
        }
        if (!is_null($this->_data['payment_id']) && (mb_strlen($this->_data['payment_id']) < 1)) {
            $ip[] = "'payment_id' length must be >= 1";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) > 500)) {
            $ip[] = "'sender_note' length must be <= 500";
        }
        if (!is_null($this->_data['sender_note']) && (mb_strlen($this->_data['sender_note']) < 1)) {
            $ip[] = "'sender_note' length must be >= 1";
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getStatusAllowableValues(): array {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_DONE,
            self::STATUS_CANCELLED,
        ];
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId(): string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id ID of the withdrawal
     * @return $this
     */
    public function setId(string $id) {
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get tx_id
     *
     * @return string|null
     */
    public function getTxId(): ?string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string|null $tx_id Transaction ID of broadcast transaction
     * @return $this
     */
    public function setTxId(?string $tx_id) {
        $this->_data['tx_id'] = $tx_id;

        return $this;
    }

    /**
     * Get account_id
     *
     * @return string
     */
    public function getAccountId(): string {
        return $this->_data["account_id"];
    }

    /**
     * Set account_id
     * 
     * @param string $account_id Sender account ID
     * @return $this
     */
    public function setAccountId(string $account_id) {
        $this->_data['account_id'] = $account_id;

        return $this;
    }

    /**
     * Get status
     *
     * @return string|null
     */
    public function getStatus(): ?string {
        return $this->_data["status"];
    }

    /**
     * Set status
     * 
     * @param string|null $status Status of the withdrawal
     * @return $this
     */
    public function setStatus(?string $status) {
        $allowed = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed, true)) {
            throw new IAE(sprintf("WithdrawalObject.setStatus: status invalid value '%s', must be one of '%s'", $status, implode("', '", $allowed)));
        }
        $this->_data['status'] = $status;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress(): string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string $address Blockchain address to send assets to. For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain addresses as a comma separated string.
     * @return $this
     */
    public function setAddress(string $address) {
        if ((mb_strlen($address) > 10000)) {
            throw new IAE('WithdrawalObject.setAddress: $address length must be <= 10000');
        }
        if ((mb_strlen($address) < 1)) {
            throw new IAE('WithdrawalObject.setAddress: $address length must be >= 1');
        }
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference(): string {
        return $this->_data["reference"];
    }

    /**
     * Set reference
     * 
     * @param string $reference Transaction internal reference - unique identifier within Tatum ledger. In order of failure, use this value to search for problems.
     * @return $this
     */
    public function setReference(string $reference) {
        $this->_data['reference'] = $reference;

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
     * @param string $amount Amount to be withdrawn to blockchain.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((mb_strlen($amount) > 38)) {
            throw new IAE('WithdrawalObject.setAmount: $amount length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('WithdrawalObject.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get attr
     *
     * @return string|null
     */
    public function getAttr(): ?string {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param string|null $attr <p>Used to parametrize withdrawal. Used for XRP withdrawal to define destination tag of recipient, or XLM memo of the recipient, if needed.<br/> For Bitcoin, Litecoin, Bitcoin Cash, used as a change address for left coins from transaction.</p>
     * @return $this
     */
    public function setAttr(?string $attr) {
        if (!is_null($attr) && (mb_strlen($attr) > 64)) {
            throw new IAE('WithdrawalObject.setAttr: $attr length must be <= 64');
        }
        if (!is_null($attr) && (mb_strlen($attr) < 1)) {
            throw new IAE('WithdrawalObject.setAttr: $attr length must be >= 1');
        }
        $this->_data['attr'] = $attr;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string
     */
    public function getFee(): string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string $fee Fee to be submitted as a transaction fee to blockchain.
     * @return $this
     */
    public function setFee(string $fee) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $fee))) {
            throw new IAE('WithdrawalObject.setFee: $fee must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($fee, true) . ' given');
        }
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get multiple_amounts
     *
     * @return string[]|null
     */
    public function getMultipleAmounts(): ?array {
        return $this->_data["multiple_amounts"];
    }

    /**
     * Set multiple_amounts
     * 
     * @param string[]|null $multiple_amounts For BTC, LTC, DOGE and BCH, it is possible to enter list of multiple recipient blockchain amounts. List of recipient addresses must be present in the address field and total sum of amounts must be equal to the amount field.
     * @return $this
     */
    public function setMultipleAmounts(?array $multiple_amounts) {
        $this->_data['multiple_amounts'] = $multiple_amounts;

        return $this;
    }

    /**
     * Get payment_id
     *
     * @return string|null
     */
    public function getPaymentId(): ?string {
        return $this->_data["payment_id"];
    }

    /**
     * Set payment_id
     * 
     * @param string|null $payment_id Identifier of the payment, shown for created Transaction within Tatum sender account.
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        if (!is_null($payment_id) && (mb_strlen($payment_id) > 100)) {
            throw new IAE('WithdrawalObject.setPaymentId: $payment_id length must be <= 100');
        }
        if (!is_null($payment_id) && (mb_strlen($payment_id) < 1)) {
            throw new IAE('WithdrawalObject.setPaymentId: $payment_id length must be >= 1');
        }
        $this->_data['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Get sender_note
     *
     * @return string|null
     */
    public function getSenderNote(): ?string {
        return $this->_data["sender_note"];
    }

    /**
     * Set sender_note
     * 
     * @param string|null $sender_note Note visible to owner of withdrawing account
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        if (!is_null($sender_note) && (mb_strlen($sender_note) > 500)) {
            throw new IAE('WithdrawalObject.setSenderNote: $sender_note length must be <= 500');
        }
        if (!is_null($sender_note) && (mb_strlen($sender_note) < 1)) {
            throw new IAE('WithdrawalObject.setSenderNote: $sender_note length must be >= 1');
        }
        $this->_data['sender_note'] = $sender_note;

        return $this;
    }
}
