<?php

/**
 * CustodialManagedAddress Model
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
 * CustodialManagedAddress Model
 */
class CustodialManagedAddress extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_SOL = 'SOL';
    public const CHAIN_LTC = 'LTC';
    public const CHAIN_BTC = 'BTC';
    protected static $_name = "CustodialManagedAddress";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "wallet_id" => ["walletId", "string", 'uuid', "getWalletId", "setWalletId"], 
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey"]
    ];

    /**
     * CustodialManagedAddress
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "wallet_id"=>null, "chain"=>null, "private_key"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['address'])) {
            $ip[] = "'address' can't be null";
        }
        if (is_null($this->_data['wallet_id'])) {
            $ip[] = "'wallet_id' can't be null";
        }
        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_BSC,
            self::CHAIN_ETH,
            self::CHAIN_KLAY,
            self::CHAIN_ONE,
            self::CHAIN_CELO,
            self::CHAIN_MATIC,
            self::CHAIN_SOL,
            self::CHAIN_LTC,
            self::CHAIN_BTC,
        ];
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
     * @param string $address Blockchain address
     * @return $this
     */
    public function setAddress(string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get wallet_id
     *
     * @return string
     */
    public function getWalletId(): string {
        return $this->_data["wallet_id"];
    }

    /**
     * Set wallet_id
     * 
     * @param string $wallet_id Unique identifier of the managed address
     * @return $this
     */
    public function setWalletId(string $wallet_id) {
        $this->_data['wallet_id'] = $wallet_id;

        return $this;
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
     * @param string $chain Blockchain of the address
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("CustodialManagedAddress.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get private_key
     *
     * @return string|null
     */
    public function getPrivateKey(): ?string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string|null $private_key Private key of the address. Not present by default.
     * @return $this
     */
    public function setPrivateKey(?string $private_key) {
        $this->_data['private_key'] = $private_key;

        return $this;
    }
}
