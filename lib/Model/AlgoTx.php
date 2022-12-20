<?php

/**
 * AlgoTx Model
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
 * AlgoTx Model
 */
class AlgoTx extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AlgoTx";
    protected static $_definition = [
        "close_rewards" => ["closeRewards", "float", null, "getCloseRewards", "setCloseRewards"], 
        "closing_amount" => ["closingAmount", "float", null, "getClosingAmount", "setClosingAmount"], 
        "confirmed_round" => ["confirmedRound", "float", null, "getConfirmedRound", "setConfirmedRound"], 
        "fee" => ["fee", "float", null, "getFee", "setFee"], 
        "first_valid" => ["firstValid", "float", null, "getFirstValid", "setFirstValid"], 
        "genesis_hash" => ["genesisHash", "string", null, "getGenesisHash", "setGenesisHash"], 
        "genesis_id" => ["genesisId", "string", null, "getGenesisId", "setGenesisId"], 
        "id" => ["id", "string", null, "getId", "setId"], 
        "intra_round_offset" => ["intraRoundOffset", "float", null, "getIntraRoundOffset", "setIntraRoundOffset"], 
        "last_valid" => ["lastValid", "float", null, "getLastValid", "setLastValid"], 
        "note" => ["note", "string", null, "getNote", "setNote"], 
        "payment_transaction" => ["paymentTransaction", "object", null, "getPaymentTransaction", "setPaymentTransaction"], 
        "receiver_rewards" => ["receiverRewards", "float", null, "getReceiverRewards", "setReceiverRewards"], 
        "round_time" => ["roundTime", "float", null, "getRoundTime", "setRoundTime"], 
        "sender" => ["sender", "string", null, "getSender", "setSender"], 
        "sender_rewards" => ["senderRewards", "float", null, "getSenderRewards", "setSenderRewards"], 
        "signature" => ["signature", "object", null, "getSignature", "setSignature"], 
        "tx_type" => ["txType", "string", null, "getTxType", "setTxType"]
    ];

    /**
     * AlgoTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["close_rewards"=>null, "closing_amount"=>null, "confirmed_round"=>null, "fee"=>null, "first_valid"=>null, "genesis_hash"=>null, "genesis_id"=>null, "id"=>null, "intra_round_offset"=>null, "last_valid"=>null, "note"=>null, "payment_transaction"=>null, "receiver_rewards"=>null, "round_time"=>null, "sender"=>null, "sender_rewards"=>null, "signature"=>null, "tx_type"=>null] as $k => $v) {
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
     * Get close_rewards
     *
     * @return float|null
     */
    public function getCloseRewards(): ?float {
        return $this->_data["close_rewards"];
    }

    /**
     * Set close_rewards
     * 
     * @param float|null $close_rewards rewards applied to close-remainder-to account.
     * @return $this
     */
    public function setCloseRewards(?float $close_rewards) {
        $this->_data['close_rewards'] = $close_rewards;

        return $this;
    }

    /**
     * Get closing_amount
     *
     * @return float|null
     */
    public function getClosingAmount(): ?float {
        return $this->_data["closing_amount"];
    }

    /**
     * Set closing_amount
     * 
     * @param float|null $closing_amount closing amount for transaction.
     * @return $this
     */
    public function setClosingAmount(?float $closing_amount) {
        $this->_data['closing_amount'] = $closing_amount;

        return $this;
    }

    /**
     * Get confirmed_round
     *
     * @return float|null
     */
    public function getConfirmedRound(): ?float {
        return $this->_data["confirmed_round"];
    }

    /**
     * Set confirmed_round
     * 
     * @param float|null $confirmed_round Round when the transaction was confirmed.
     * @return $this
     */
    public function setConfirmedRound(?float $confirmed_round) {
        $this->_data['confirmed_round'] = $confirmed_round;

        return $this;
    }

    /**
     * Get fee
     *
     * @return float|null
     */
    public function getFee(): ?float {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param float|null $fee Transaction fee
     * @return $this
     */
    public function setFee(?float $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get first_valid
     *
     * @return float|null
     */
    public function getFirstValid(): ?float {
        return $this->_data["first_valid"];
    }

    /**
     * Set first_valid
     * 
     * @param float|null $first_valid First valid round for this transaction.
     * @return $this
     */
    public function setFirstValid(?float $first_valid) {
        $this->_data['first_valid'] = $first_valid;

        return $this;
    }

    /**
     * Get genesis_hash
     *
     * @return string|null
     */
    public function getGenesisHash(): ?string {
        return $this->_data["genesis_hash"];
    }

    /**
     * Set genesis_hash
     * 
     * @param string|null $genesis_hash Hash of genesis block
     * @return $this
     */
    public function setGenesisHash(?string $genesis_hash) {
        $this->_data['genesis_hash'] = $genesis_hash;

        return $this;
    }

    /**
     * Get genesis_id
     *
     * @return string|null
     */
    public function getGenesisId(): ?string {
        return $this->_data["genesis_id"];
    }

    /**
     * Set genesis_id
     * 
     * @param string|null $genesis_id genesis block ID.
     * @return $this
     */
    public function setGenesisId(?string $genesis_id) {
        $this->_data['genesis_id'] = $genesis_id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string|null
     */
    public function getId(): ?string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string|null $id transaction ID
     * @return $this
     */
    public function setId(?string $id) {
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get intra_round_offset
     *
     * @return float|null
     */
    public function getIntraRoundOffset(): ?float {
        return $this->_data["intra_round_offset"];
    }

    /**
     * Set intra_round_offset
     * 
     * @param float|null $intra_round_offset Offset into the round where this transaction was confirmed.
     * @return $this
     */
    public function setIntraRoundOffset(?float $intra_round_offset) {
        $this->_data['intra_round_offset'] = $intra_round_offset;

        return $this;
    }

    /**
     * Get last_valid
     *
     * @return float|null
     */
    public function getLastValid(): ?float {
        return $this->_data["last_valid"];
    }

    /**
     * Set last_valid
     * 
     * @param float|null $last_valid Last valid round for this transaction.
     * @return $this
     */
    public function setLastValid(?float $last_valid) {
        $this->_data['last_valid'] = $last_valid;

        return $this;
    }

    /**
     * Get note
     *
     * @return string|null
     */
    public function getNote(): ?string {
        return $this->_data["note"];
    }

    /**
     * Set note
     * 
     * @param string|null $note Free form data
     * @return $this
     */
    public function setNote(?string $note) {
        $this->_data['note'] = $note;

        return $this;
    }

    /**
     * Get payment_transaction
     *
     * @return object|null
     */
    public function getPaymentTransaction(): ?object {
        return $this->_data["payment_transaction"];
    }

    /**
     * Set payment_transaction
     * 
     * @param object|null $payment_transaction payment Transaction
     * @return $this
     */
    public function setPaymentTransaction(?object $payment_transaction) {
        $this->_data['payment_transaction'] = $payment_transaction;

        return $this;
    }

    /**
     * Get receiver_rewards
     *
     * @return float|null
     */
    public function getReceiverRewards(): ?float {
        return $this->_data["receiver_rewards"];
    }

    /**
     * Set receiver_rewards
     * 
     * @param float|null $receiver_rewards rewards applied to receiver account.
     * @return $this
     */
    public function setReceiverRewards(?float $receiver_rewards) {
        $this->_data['receiver_rewards'] = $receiver_rewards;

        return $this;
    }

    /**
     * Get round_time
     *
     * @return float|null
     */
    public function getRoundTime(): ?float {
        return $this->_data["round_time"];
    }

    /**
     * Set round_time
     * 
     * @param float|null $round_time Time when the block this transaction is in was confirmed.
     * @return $this
     */
    public function setRoundTime(?float $round_time) {
        $this->_data['round_time'] = $round_time;

        return $this;
    }

    /**
     * Get sender
     *
     * @return string|null
     */
    public function getSender(): ?string {
        return $this->_data["sender"];
    }

    /**
     * Set sender
     * 
     * @param string|null $sender Sender's address
     * @return $this
     */
    public function setSender(?string $sender) {
        $this->_data['sender'] = $sender;

        return $this;
    }

    /**
     * Get sender_rewards
     *
     * @return float|null
     */
    public function getSenderRewards(): ?float {
        return $this->_data["sender_rewards"];
    }

    /**
     * Set sender_rewards
     * 
     * @param float|null $sender_rewards rewards applied to sender account.
     * @return $this
     */
    public function setSenderRewards(?float $sender_rewards) {
        $this->_data['sender_rewards'] = $sender_rewards;

        return $this;
    }

    /**
     * Get signature
     *
     * @return object|null
     */
    public function getSignature(): ?object {
        return $this->_data["signature"];
    }

    /**
     * Set signature
     * 
     * @param object|null $signature signature
     * @return $this
     */
    public function setSignature(?object $signature) {
        $this->_data['signature'] = $signature;

        return $this;
    }

    /**
     * Get tx_type
     *
     * @return string|null
     */
    public function getTxType(): ?string {
        return $this->_data["tx_type"];
    }

    /**
     * Set tx_type
     * 
     * @param string|null $tx_type indicates what type of transaction this is. Different types have differnet fields.
     * @return $this
     */
    public function setTxType(?string $tx_type) {
        $this->_data['tx_type'] = $tx_type;

        return $this;
    }
}
