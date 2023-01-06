<?php

/**
 * CreateTransaction Model
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
 * CreateTransaction Model
 */
class CreateTransaction extends AbstractModel {

    public const _D = null;
    protected static $_name = "CreateTransaction";
    protected static $_definition = [
        "sender_account_id" => ["senderAccountId", "string", null, "getSenderAccountId", "setSenderAccountId", null, ["r" => 1, "nl" => 24, "xl" => 24]], 
        "recipient_account_id" => ["recipientAccountId", "string", null, "getRecipientAccountId", "setRecipientAccountId", null, ["r" => 1, "nl" => 24, "xl" => 24]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", "xl" => 38]], 
        "anonymous" => ["anonymous", "bool", null, "getAnonymous", "setAnonymous", false, ["r" => 0]], 
        "compliant" => ["compliant", "bool", null, "getCompliant", "setCompliant", null, ["r" => 0]], 
        "transaction_code" => ["transactionCode", "string", null, "getTransactionCode", "setTransactionCode", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "payment_id" => ["paymentId", "string", null, "getPaymentId", "setPaymentId", null, ["r" => 0, "nl" => 1, "xl" => 100]], 
        "recipient_note" => ["recipientNote", "string", null, "getRecipientNote", "setRecipientNote", null, ["r" => 0, "nl" => 1, "xl" => 500]], 
        "base_rate" => ["baseRate", "float", null, "getBaseRate", "setBaseRate", 1, ["r" => 0, "n" => [0]]], 
        "sender_note" => ["senderNote", "string", null, "getSenderNote", "setSenderNote", null, ["r" => 0, "nl" => 1, "xl" => 500]]
    ];

    /**
     * CreateTransaction
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get sender_account_id
     *
     * @return string
     */
    public function getSenderAccountId(): string {
        return $this->_data["sender_account_id"];
    }

    /**
     * Set sender_account_id
     * 
     * @param string $sender_account_id Internal sender account ID within Tatum platform
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderAccountId(string $sender_account_id) {
        return $this->_set("sender_account_id", $sender_account_id);
    }

    /**
     * Get recipient_account_id
     *
     * @return string
     */
    public function getRecipientAccountId(): string {
        return $this->_data["recipient_account_id"];
    }

    /**
     * Set recipient_account_id
     * 
     * @param string $recipient_account_id Internal recipient account ID within Tatum platform
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipientAccountId(string $recipient_account_id) {
        return $this->_set("recipient_account_id", $recipient_account_id);
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
     * @param string $amount Amount to be sent.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get anonymous
     *
     * @return bool|null
     */
    public function getAnonymous(): ?bool {
        return $this->_data["anonymous"];
    }

    /**
     * Set anonymous
     * 
     * @param bool|null $anonymous Anonymous transaction does not show sender account to recipient, default is false
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAnonymous(?bool $anonymous) {
        return $this->_set("anonymous", $anonymous);
    }

    /**
     * Get compliant
     *
     * @return bool|null
     */
    public function getCompliant(): ?bool {
        return $this->_data["compliant"];
    }

    /**
     * Set compliant
     * 
     * @param bool|null $compliant Enable compliant checks. Transaction will not be processed, if compliant check fails.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCompliant(?bool $compliant) {
        return $this->_set("compliant", $compliant);
    }

    /**
     * Get transaction_code
     *
     * @return string|null
     */
    public function getTransactionCode(): ?string {
        return $this->_data["transaction_code"];
    }

    /**
     * Set transaction_code
     * 
     * @param string|null $transaction_code For bookkeeping to distinct transaction purpose.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTransactionCode(?string $transaction_code) {
        return $this->_set("transaction_code", $transaction_code);
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
     * @param string|null $payment_id Payment ID, External identifier of the payment, which can be used to pair transactions within Tatum accounts.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPaymentId(?string $payment_id) {
        return $this->_set("payment_id", $payment_id);
    }

    /**
     * Get recipient_note
     *
     * @return string|null
     */
    public function getRecipientNote(): ?string {
        return $this->_data["recipient_note"];
    }

    /**
     * Set recipient_note
     * 
     * @param string|null $recipient_note Note visible to both, sender and recipient
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecipientNote(?string $recipient_note) {
        return $this->_set("recipient_note", $recipient_note);
    }

    /**
     * Get base_rate
     *
     * @return float|null
     */
    public function getBaseRate(): ?float {
        return $this->_data["base_rate"];
    }

    /**
     * Set base_rate
     * 
     * @param float|null $base_rate Exchange rate of the base pair. Only applicable for Tatum's Virtual currencies Ledger transactions. Override default exchange rate for the Virtual Currency.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBaseRate(?float $base_rate) {
        return $this->_set("base_rate", $base_rate);
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
     * @param string|null $sender_note Note visible to sender
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSenderNote(?string $sender_note) {
        return $this->_set("sender_note", $sender_note);
    }
}
