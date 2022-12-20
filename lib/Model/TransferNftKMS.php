<?php

/**
 * TransferNftKMS Model
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
 * TransferNftKMS Model
 */
class TransferNftKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_KCS = 'KCS';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_KLAY = 'KLAY';
    public const CHAIN_BSC = 'BSC';
    protected static $_name = "TransferNftKMS";
    protected static $_definition = [
        "value" => ["value", "string", null, "getValue", "setValue"], 
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "to" => ["to", "string", null, "getTo", "setTo"], 
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "provenance" => ["provenance", "bool", null, "getProvenance", "setProvenance"], 
        "provenance_data" => ["provenanceData", "string", null, "getProvenanceData", "setProvenanceData"], 
        "token_price" => ["tokenPrice", "string", null, "getTokenPrice", "setTokenPrice"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\CustomFee", null, "getFee", "setFee"]
    ];

    /**
     * TransferNftKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["value"=>null, "chain"=>null, "to"=>null, "token_id"=>null, "contract_address"=>null, "index"=>null, "provenance"=>null, "provenance_data"=>null, "token_price"=>null, "signature_id"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
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
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if ((mb_strlen($this->_data['to']) > 42)) {
            $ip[] = "'to' length must be <= 42";
        }
        if ((mb_strlen($this->_data['to']) < 42)) {
            $ip[] = "'to' length must be >= 42";
        }
        if (is_null($this->_data['token_id'])) {
            $ip[] = "'token_id' can't be null";
        }
        if ((mb_strlen($this->_data['token_id']) > 78)) {
            $ip[] = "'token_id' length must be <= 78";
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
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (!is_null($this->_data['token_price']) && (mb_strlen($this->_data['token_price']) > 256)) {
            $ip[] = "'token_price' length must be <= 256";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
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
            self::CHAIN_MATIC,
            self::CHAIN_KCS,
            self::CHAIN_ONE,
            self::CHAIN_KLAY,
            self::CHAIN_BSC,
        ];
    }

    /**
     * Get value
     *
     * @return string|null
     */
    public function getValue(): ?string {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param string|null $value If token to be transferred is Royalty NFT token, this is a value to be paid as a cashback to the authors of the token.
     * @return $this
     */
    public function setValue(?string $value) {
        $this->_data['value'] = $value;

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
     * @param string $chain The blockchain to work with
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("TransferNftKMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

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
     * @param string $to Blockchain address to send NFT token to
     * @return $this
     */
    public function setTo(string $to) {
        if ((mb_strlen($to) > 42)) {
            throw new IAE('TransferNftKMS.setTo: $to length must be <= 42');
        }
        if ((mb_strlen($to) < 42)) {
            throw new IAE('TransferNftKMS.setTo: $to length must be >= 42');
        }
        $this->_data['to'] = $to;

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
     * @param string $token_id ID of the token.
     * @return $this
     */
    public function setTokenId(string $token_id) {
        if ((mb_strlen($token_id) > 78)) {
            throw new IAE('TransferNftKMS.setTokenId: $token_id length must be <= 78');
        }
        $this->_data['token_id'] = $token_id;

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
     * @param string $contract_address Address of NFT token
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 42)) {
            throw new IAE('TransferNftKMS.setContractAddress: $contract_address length must be <= 42');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('TransferNftKMS.setContractAddress: $contract_address length must be >= 42');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
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
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('TransferNftKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get provenance
     *
     * @return bool|null
     */
    public function getProvenance(): ?bool {
        return $this->_data["provenance"];
    }

    /**
     * Set provenance
     * 
     * @param bool|null $provenance True if the contract is provenance type
     * @return $this
     */
    public function setProvenance(?bool $provenance) {
        $this->_data['provenance'] = $provenance;

        return $this;
    }

    /**
     * Get provenance_data
     *
     * @return string|null
     */
    public function getProvenanceData(): ?string {
        return $this->_data["provenance_data"];
    }

    /**
     * Set provenance_data
     * 
     * @param string|null $provenance_data data you want to store with transaction, optional and valid only if provenance contract
     * @return $this
     */
    public function setProvenanceData(?string $provenance_data) {
        $this->_data['provenance_data'] = $provenance_data;

        return $this;
    }

    /**
     * Get token_price
     *
     * @return string|null
     */
    public function getTokenPrice(): ?string {
        return $this->_data["token_price"];
    }

    /**
     * Set token_price
     * 
     * @param string|null $token_price current price of the token, valid only for provenance
     * @return $this
     */
    public function setTokenPrice(?string $token_price) {
        if (!is_null($token_price) && (mb_strlen($token_price) > 256)) {
            throw new IAE('TransferNftKMS.setTokenPrice: $token_price length must be <= 256');
        }
        $this->_data['token_price'] = $token_price;

        return $this;
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
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

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
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee
     *
     * @return \Tatum\Model\CustomFee|null
     */
    public function getFee(): ?\Tatum\Model\CustomFee {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param \Tatum\Model\CustomFee|null $fee fee
     * @return $this
     */
    public function setFee(?\Tatum\Model\CustomFee $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }
}
