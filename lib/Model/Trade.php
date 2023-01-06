<?php

/**
 * Trade Model
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
 * Trade Model
 */
class Trade extends AbstractModel {

    public const _D = null;
    public const TYPE_BUY = 'BUY';
    public const TYPE_SELL = 'SELL';
    protected static $_name = "Trade";
    protected static $_definition = [
        "id" => ["id", "string", null, "getId", "setId", null, ["r" => 0]], 
        "type" => ["type", "string", null, "getType", "setType", null, ["r" => 0, "e" => 1]], 
        "price" => ["price", "string", null, "getPrice", "setPrice", null, ["r" => 0]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 0]], 
        "pair" => ["pair", "string", null, "getPair", "setPair", null, ["r" => 0]], 
        "is_maker" => ["isMaker", "bool", null, "getIsMaker", "setIsMaker", null, ["r" => 0]], 
        "fill" => ["fill", "string", null, "getFill", "setFill", null, ["r" => 0]], 
        "fee_account_id" => ["feeAccountId", "string", null, "getFeeAccountId", "setFeeAccountId", null, ["r" => 0, "nl" => 24, "xl" => 24]], 
        "fee" => ["fee", "float", null, "getFee", "setFee", null, ["r" => 0, "n" => [0], "x" => [100]]], 
        "currency1_account_id" => ["currency1AccountId", "string", null, "getCurrency1AccountId", "setCurrency1AccountId", null, ["r" => 0]], 
        "currency2_account_id" => ["currency2AccountId", "string", null, "getCurrency2AccountId", "setCurrency2AccountId", null, ["r" => 0]], 
        "created" => ["created", "float", null, "getCreated", "setCreated", null, ["r" => 0]], 
        "attr" => ["attr", "\Tatum\Model\TradeAttr", null, "getAttr", "setAttr", null, ["r" => 0]]
    ];

    /**
     * Trade
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
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_BUY,
            self::TYPE_SELL,
        ];
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
     * @param string|null $id ID of the trade
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setId(?string $id) {
        return $this->_set("id", $id);
    }

    /**
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type Type of the trade, BUY or SELL
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setType(?string $type) {
        return $this->_set("type", $type);
    }

    /**
     * Get price
     *
     * @return string|null
     */
    public function getPrice(): ?string {
        return $this->_data["price"];
    }

    /**
     * Set price
     * 
     * @param string|null $price Price to buy / sell
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrice(?string $price) {
        return $this->_set("price", $price);
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
     * @param string|null $amount Amount of the trade to be bought / sold
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(?string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get pair
     *
     * @return string|null
     */
    public function getPair(): ?string {
        return $this->_data["pair"];
    }

    /**
     * Set pair
     * 
     * @param string|null $pair Trading pair
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPair(?string $pair) {
        return $this->_set("pair", $pair);
    }

    /**
     * Get is_maker
     *
     * @return bool|null
     */
    public function getIsMaker(): ?bool {
        return $this->_data["is_maker"];
    }

    /**
     * Set is_maker
     * 
     * @param bool|null $is_maker If closed trade was Maker or Taker trade
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIsMaker(?bool $is_maker) {
        return $this->_set("is_maker", $is_maker);
    }

    /**
     * Get fill
     *
     * @return string|null
     */
    public function getFill(): ?string {
        return $this->_data["fill"];
    }

    /**
     * Set fill
     * 
     * @param string|null $fill How much of the trade was already filled.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFill(?string $fill) {
        return $this->_set("fill", $fill);
    }

    /**
     * Get fee_account_id
     *
     * @return string|null
     */
    public function getFeeAccountId(): ?string {
        return $this->_data["fee_account_id"];
    }

    /**
     * Set fee_account_id
     * 
     * @param string|null $fee_account_id ID of the account where fee will be paid, if any. If trade is a BUY or FUTURE_BUY type, feeAccountId must have same currency as a currency of currency2AccountId, and vice versa if trade is a SELL or FUTURE_SELL type, feeAccountId must have same currency as a currency of currency1AccountId.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFeeAccountId(?string $fee_account_id) {
        return $this->_set("fee_account_id", $fee_account_id);
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
     * @param float|null $fee Percentage of the trade amount to be paid as a fee.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFee(?float $fee) {
        return $this->_set("fee", $fee);
    }

    /**
     * Get currency1_account_id
     *
     * @return string|null
     */
    public function getCurrency1AccountId(): ?string {
        return $this->_data["currency1_account_id"];
    }

    /**
     * Set currency1_account_id
     * 
     * @param string|null $currency1_account_id ID of the account of the currenc 1 trade currency
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency1AccountId(?string $currency1_account_id) {
        return $this->_set("currency1_account_id", $currency1_account_id);
    }

    /**
     * Get currency2_account_id
     *
     * @return string|null
     */
    public function getCurrency2AccountId(): ?string {
        return $this->_data["currency2_account_id"];
    }

    /**
     * Set currency2_account_id
     * 
     * @param string|null $currency2_account_id ID of the account of the currenc 2 trade currency
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCurrency2AccountId(?string $currency2_account_id) {
        return $this->_set("currency2_account_id", $currency2_account_id);
    }

    /**
     * Get created
     *
     * @return float|null
     */
    public function getCreated(): ?float {
        return $this->_data["created"];
    }

    /**
     * Set created
     * 
     * @param float|null $created Creation date, UTC millis
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCreated(?float $created) {
        return $this->_set("created", $created);
    }

    /**
     * Get attr
     *
     * @return \Tatum\Model\TradeAttr|null
     */
    public function getAttr(): ?\Tatum\Model\TradeAttr {
        return $this->_data["attr"];
    }

    /**
     * Set attr
     * 
     * @param \Tatum\Model\TradeAttr|null $attr attr
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAttr(?\Tatum\Model\TradeAttr $attr) {
        return $this->_set("attr", $attr);
    }
}
