<?php

/**
 * MintMultiToken Model
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
 * MintMultiToken Model
 */
class MintMultiToken extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_KCS = 'KCS';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_BSC = 'BSC';
    protected static $_name = "MintMultiToken";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "token_id" => ["tokenId", "string", null, "getTokenId", "setTokenId"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "amount" => ["amount", "string", null, "getAmount", "setAmount"], 
        "data" => ["data", "string", null, "getData", "setData"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee"]
    ];

    /**
     * MintMultiToken
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "token_id"=>null, "to"=>null, "contract_address"=>null, "amount"=>null, "data"=>null, "from_private_key"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['chain'])) {
            $ip[] = "'chain' can't be null";
        }
        $allowed = $this->getChainAllowableValues();
        $value = $this->_data['chain'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'chain' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['token_id'])) {
            $ip[] = "'token_id' can't be null";
        }
        if ((mb_strlen($this->_data['token_id']) > 32)) {
            $ip[] = "'token_id' length must be <= 32";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 42)) {
            $ip[] = "'to' length must be <= 42";
        }
        if ((mb_strlen($this->_data['to']) < 42)) {
            $ip[] = "'to' length must be >= 42";
        }
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 42)) {
            $ip[] = "'contract_address' length must be <= 42";
        }
        if ((mb_strlen($this->_data['contract_address']) < 42)) {
            $ip[] = "'contract_address' length must be >= 42";
        }
        if (is_null($this->_data['amount'])) {
            $ip[] = "'amount' can't be null";
        }
        if ((mb_strlen($this->_data['amount']) > 32)) {
            $ip[] = "'amount' length must be <= 32";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 66)) {
            $ip[] = "'from_private_key' length must be <= 66";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 66)) {
            $ip[] = "'from_private_key' length must be >= 66";
        }
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
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
            self::CHAIN_ETH,
            self::CHAIN_ONE,
            self::CHAIN_MATIC,
            self::CHAIN_KCS,
            self::CHAIN_KLAY,
            self::CHAIN_BSC,
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
     * @param string $chain Chain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("MintMultiToken.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get token_id
     *
     * @return string
     */
    public function getTokenId(): string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string $token_id ID of token to be created.
     * @return $this
     */
    public function setTokenId(string $token_id) {
        if ((mb_strlen($token_id) > 32)) {
            throw new IAE('MintMultiToken.setTokenId: $token_id length must be <= 32');
        }
        $this->_data['token_id'] = $token_id;

        return $this;
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
     * @param string $to Blockchain address to send Multi Token token to
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 42)) {
            throw new IAE('MintMultiToken.setTo: $to length must be <= 42');
        }
        if ((mb_strlen($to) < 42)) {
            throw new IAE('MintMultiToken.setTo: $to length must be >= 42');
        }
        $this->_data['to'] = $to;

        return $this;
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
     * @param string $contract_address Address of Multi Token token
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 42)) {
            throw new IAE('MintMultiToken.setContractAddress: $contract_address length must be <= 42');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('MintMultiToken.setContractAddress: $contract_address length must be >= 42');
        }
        $this->_data['contract_address'] = $contract_address;

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
     * @param string $amount amount of token to be created.
     * @return $this
     */
    public function setAmount(string $amount) {
        if ((mb_strlen($amount) > 32)) {
            throw new IAE('MintMultiToken.setAmount: $amount length must be <= 32');
        }
        $this->_data['amount'] = $amount;

        return $this;
    }

    /**
     * Get data
     *
     * @return string|null
     */
    public function getData(): ?string {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param string|null $data Data in bytes
     * @return $this
     */
    public function setData(?string $data) {
        $this->_data['data'] = $data;

        return $this;
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
     * @param string $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 66)) {
            throw new IAE('MintMultiToken.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('MintMultiToken.setFromPrivateKey: $from_private_key length must be >= 66');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce Nonce to be set to transaction. If not present, last known nonce will be used.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('MintMultiToken.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\DeployErc20Fee|null
     */
    public function getFee(): ?\Tatum\Model\DeployErc20Fee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\DeployErc20Fee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\DeployErc20Fee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}
