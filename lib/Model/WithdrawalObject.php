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
!defined("TATUM-SDK") && exit();

/**
 * WithdrawalObject Model
 */
class WithdrawalObject extends AbstractModel {

    public const _D = null;
    public const STATUS_IN_PROGRESS = 'InProgress';
    public const STATUS_DONE = 'Done';
    public const STATUS_CANCELLED = 'Cancelled';
    protected static $_name = "WithdrawalObject";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 1]], 
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId", null, ["r" => 0]], 
        "account_id" => ["accountId", "string", null, "getAccountId", "setAccountId", null, ["r" => 1]], 
        "status" => ["status", "string", null, "getStatus", "setStatus", null, ["r" => 0, "e" => 1]], 
        "address" => ["address", "string", null, "getAddress", "setAddress", null, ["r" => 1, "nl" => 1, "xl" => 10000]], 
        "reference" => ["reference", "string", null, "getReference", "setReference", null, ["r" => 1]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "xl" => 38]], 
        "attr" => ["attr", "string", null, "getAttr", "setAttr", null, ["r" => 0, "nl" => 1, "xl" => 64]], 
        "fee" => ["fee", "string", null, "getFee", "setFee", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]], 
        "multiple_amounts" => ["multipleAmounts", "string[]", null, "getMultipleAmounts", "setMultipleAmounts", null, ["r" => 0, "c" => 1]], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote", null, ["r" => 0, "nl" => 1, "xl" => 500]]
    ];

    /**
     * WithdrawalObject
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(string $id) {
        return $this->_set("id", $id);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(?string $tx_id) {
        return $this->_set("tx_id", $tx_id);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountId(string $account_id) {
        return $this->_set("account_id", $account_id);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStatus(?string $status) {
        return $this->_set("status", $status);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAddress(string $address) {
        return $this->_set("address", $address);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReference(string $reference) {
        return $this->_set("reference", $reference);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(?string $attr) {
        return $this->_set("attr", $attr);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(string $fee) {
        return $this->_set("fee", $fee);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMultipleAmounts(?array $multiple_amounts) {
        return $this->_set("multiple_amounts", $multiple_amounts);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        return $this->_set("payment_id", $payment_id);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        return $this->_set("sender_note", $sender_note);
    }
}
