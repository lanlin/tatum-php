<?php

/**
 * TransferNftAlgo Model
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
 * TransferNftAlgo Model
 */
class TransferNftAlgo extends AbstractModel {

    public const _D = null;
    public const CHAIN_ALGO = 'ALGO';
    protected static $_name = "TransferNftAlgo";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "to" => ["to", "string", null, "getTo", "setTo", null, ["r" => 1, "nl" => 58, "xl" => 58]], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress", null, ["r" => 1, "xl" => 256]], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey", null, ["r" => 1, "nl" => 106, "xl" => 103]], 
        "amount" => ["amount", "float", null, "getAmount", "setAmount", 1, ["r" => 0, "n" => [1]]]
    ];

    /**
     * TransferNftAlgo
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
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_ALGO,
        ];
    }

    /**
     * Get chain
     *
     * @return string
     */
    public function getChain(): string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain to work with
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
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
     * @param string $to The blockchain address to transfer the NFT to
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTo(string $to) {
        return $this->_set("to", $to);
    }

    /**
     * Get contract_address
     *
     * @return string
     */
    public function getContractAddress(): string {
        return $this->_data["contract_address"];
    }

    /**
     * Set contract_address
     * 
     * @param string $contract_address The asset ID (the ID of the NFT)
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        return $this->_set("contract_address", $contract_address);
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
     * @param string $from_private_key The private key of the sender's blockchain address
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        return $this->_set("from_private_key", $from_private_key);
    }

    /**
     * Get amount
     *
     * @return float|null
     */
    public function getAmount(): ?float {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param float|null $amount (For <a href=\"https://developer.algorand.org/docs/get-started/tokenization/nft/#fractional-nfts\" target=\"_blank\">fractional NFTs</a> only) The number of NFT fractions to transfer; if not set, defaults to 1, which means that one fraction of the NFT will be transferred
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(?float $amount) {
        return $this->_set("amount", $amount);
    }
}
