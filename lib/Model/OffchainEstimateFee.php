<?php

/**
 * OffchainEstimateFee Model
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
 * OffchainEstimateFee Model
 */
class OffchainEstimateFee extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "OffchainEstimateFee";
    protected static $_definition = [
        "sender_account_id" => ["senderAccountId", "string", null, "getSenderAccountId", "setSenderAccountId"], 
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "multiple_amounts" => ["multipleAmounts", "string[]", null, "getMultipleAmounts", "setMultipleAmounts"], 
        "attr" => ["attr", "string", null, "getAttr", "setAttr"], 
        "xpub" => ["xpub", "string", null, "getXpub", "setXpub"]
    ];

    /**
     * OffchainEstimateFee
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["sender_account_id"=>null, "address"=>null, "amount"=>null, "multiple_amounts"=>null, "attr"=>null, "xpub"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['sender_account_id'])) {
            $ip[] = "'sender_account_id' can't be null";
        }
        if ((mb_strlen($this->_data['sender_account_id']) > 24)) {
            $ip[] = "'sender_account_id' length must be <= 24";
        }
        if ((mb_strlen($this->_data['sender_account_id']) < 24)) {
            $ip[] = "'sender_account_id' length must be >= 24";
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
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if ((mb_strlen($this->_data['amount']) > 38)) {
            $ip[] = "'amount' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['amount'])) {
            $ip[] = "'amount' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (!is_null($this->_data['attr']) && (mb_strlen($this->_data['attr']) > 256)) {
            $ip[] = "'attr' length must be <= 256";
        }
        if (!is_null($this->_data['attr']) && (mb_strlen($this->_data['attr']) < 1)) {
            $ip[] = "'attr' length must be >= 1";
        }
        if (!is_null($this->_data['xpub']) && (mb_strlen($this->_data['xpub']) > 150)) {
            $ip[] = "'xpub' length must be <= 150";
        }
        if (!is_null($this->_data['xpub']) && (mb_strlen($this->_data['xpub']) < 1)) {
            $ip[] = "'xpub' length must be >= 1";
        }
        
        return $ip;
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
     * @param string $sender_account_id Sender account ID
     * @return $this
     */
    public function setSenderAccountId(string $sender_account_id) {
        if ((mb_strlen($sender_account_id) > 24)) {
            throw new IAE('OffchainEstimateFee.setSenderAccountId: $sender_account_id length must be <= 24');
        }
        if ((mb_strlen($sender_account_id) < 24)) {
            throw new IAE('OffchainEstimateFee.setSenderAccountId: $sender_account_id length must be >= 24');
        }
        $this->_data['sender_account_id'] = $sender_account_id;

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
            throw new IAE('OffchainEstimateFee.setAddress: $address length must be <= 10000');
        }
        if ((mb_strlen($address) < 1)) {
            throw new IAE('OffchainEstimateFee.setAddress: $address length must be >= 1');
        }
        $this->_data['address'] = $address;

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
            throw new IAE('OffchainEstimateFee.setAmount: $amount length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $amount))) {
            throw new IAE('OffchainEstimateFee.setAmount: $amount must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($amount, true) . ' given');
        }
        $this->_data['amount'] = $amount;

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
     * @param string|null $attr Used to parametrize withdrawal as a change address for left coins from transaction. XPub or attr must be used.
     * @return $this
     */
    public function setAttr(?string $attr) {
        if (!is_null($attr) && (mb_strlen($attr) > 256)) {
            throw new IAE('OffchainEstimateFee.setAttr: $attr length must be <= 256');
        }
        if (!is_null($attr) && (mb_strlen($attr) < 1)) {
            throw new IAE('OffchainEstimateFee.setAttr: $attr length must be >= 1');
        }
        $this->_data['attr'] = $attr;

        return $this;
    }

    /**
     * Get xpub
     *
     * @return string|null
     */
    public function getXpub(): ?string {
        return $this->_data["xpub"];
    }

    /**
     * Set xpub
     * 
     * @param string|null $xpub Extended public key (xpub) of the wallet associated with the accounts.
     * @return $this
     */
    public function setXpub(?string $xpub) {
        if (!is_null($xpub) && (mb_strlen($xpub) > 150)) {
            throw new IAE('OffchainEstimateFee.setXpub: $xpub length must be <= 150');
        }
        if (!is_null($xpub) && (mb_strlen($xpub) < 1)) {
            throw new IAE('OffchainEstimateFee.setXpub: $xpub length must be >= 1');
        }
        $this->_data['xpub'] = $xpub;

        return $this;
    }
}
