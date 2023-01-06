<?php

/**
 * FreezeTronKMS Model
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
 * FreezeTronKMS Model
 */
class FreezeTronKMS extends AbstractModel {

    public const _D = null;
    public const RESOURCE_BANDWIDTH = 'BANDWIDTH';
    public const RESOURCE_ENERGY = 'ENERGY';
    protected static $_name = "FreezeTronKMS";
    protected static $_definition = [
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 34, "xl" => 34]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]], 
        "index" => ["index", "float", null, "getIndex", "setIndex", null, ["r" => 0, "n" => [0]]], 
        "receiver" => ["receiver", "string", null, "getReceiver", "setReceiver", null, ["r" => 1, "nl" => 34, "xl" => 34]], 
        "duration" => ["duration", "float", null, "getDuration", "setDuration", null, ["r" => 1, "n" => [3]]], 
        "resource" => ["resource", "string", null, "getResource", "setResource", null, ["r" => 1, "e" => 1]], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 1, "p" => "/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/"]]
    ];

    /**
     * FreezeTronKMS
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
    public function getResourceAllowableValues(): array {
        return [
            self::RESOURCE_BANDWIDTH,
            self::RESOURCE_ENERGY,
        ];
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
     * @param string $from Sender address of TRON account in Base58 format.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }

    /**
     * Get index
     *
     * @return float|null
     */
    public function getIndex(): ?float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float|null $index If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndex(?float $index) {
        return $this->_set("index", $index);
    }

    /**
     * Get receiver
     *
     * @return string
     */
    public function getReceiver(): string {
        return $this->_data["receiver"];
    }

    /**
     * Set receiver
     * 
     * @param string $receiver Recipient address of frozen BANDWIDTH or ENERGY.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setReceiver(string $receiver) {
        return $this->_set("receiver", $receiver);
    }

    /**
     * Get duration
     *
     * @return float
     */
    public function getDuration(): float {
        return $this->_data["duration"];
    }

    /**
     * Set duration
     * 
     * @param float $duration Duration of frozen funds, in days.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDuration(float $duration) {
        return $this->_set("duration", $duration);
    }

    /**
     * Get resource
     *
     * @return string
     */
    public function getResource(): string {
        return $this->_data["resource"];
    }

    /**
     * Set resource
     * 
     * @param string $resource Resource to obtain, BANDWIDTH or ENERGY.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setResource(string $resource) {
        return $this->_set("resource", $resource);
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
     * @param string $amount Amount to be frozen in TRX.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(string $amount) {
        return $this->_set("amount", $amount);
    }
}
