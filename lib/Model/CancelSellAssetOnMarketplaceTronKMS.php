<?php

/**
 * CancelSellAssetOnMarketplaceTronKMS Model
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
 * CancelSellAssetOnMarketplaceTronKMS Model
 */
class CancelSellAssetOnMarketplaceTronKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    protected static $_name = "CancelSellAssetOnMarketplaceTronKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "from" => ["from", "string", null, "getFrom", "setFrom"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit"]
    ];

    /**
     * CancelSellAssetOnMarketplaceTronKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "contract_address"=>null, "from"=>null, "signature_id"=>null, "index"=>null, "erc20_address"=>null, "from_private_key"=>null, "fee_limit"=>null] as $k => $v) {
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
        if (is_null($this->_data['contract_address'])) {
            $ip[] = "'contract_address' can't be null";
        }
        if ((mb_strlen($this->_data['contract_address']) > 34)) {
            $ip[] = "'contract_address' length must be <= 34";
        }
        if ((mb_strlen($this->_data['contract_address']) < 34)) {
            $ip[] = "'contract_address' length must be >= 34";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if ((mb_strlen($this->_data['from']) > 34)) {
            $ip[] = "'from' length must be <= 34";
        }
        if ((mb_strlen($this->_data['from']) < 34)) {
            $ip[] = "'from' length must be >= 34";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (!is_null($this->_data['erc20_address']) && (mb_strlen($this->_data['erc20_address']) > 34)) {
            $ip[] = "'erc20_address' length must be <= 34";
        }
        if (!is_null($this->_data['erc20_address']) && (mb_strlen($this->_data['erc20_address']) < 34)) {
            $ip[] = "'erc20_address' length must be >= 34";
        }
        if (!is_null($this->_data['from_private_key']) && (mb_strlen($this->_data['from_private_key']) > 64)) {
            $ip[] = "'from_private_key' length must be <= 64";
        }
        if (!is_null($this->_data['from_private_key']) && (mb_strlen($this->_data['from_private_key']) < 64)) {
            $ip[] = "'from_private_key' length must be >= 64";
        }
        if (is_null($this->_data['fee_limit'])) {
            $ip[] = "'fee_limit' can't be null";
        }
        if (($this->_data['fee_limit'] < 0)) {
            $ip[] = "'fee_limit' must be >= 0";
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
            self::CHAIN_TRON,
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
     * @param string $chain Blockchain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("CancelSellAssetOnMarketplaceTronKMS.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

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
     * @param string $contract_address Address of the marketplace smart contract.
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 34)) {
            throw new IAE('CancelSellAssetOnMarketplaceTronKMS.setContractAddress: $contract_address length must be <= 34');
        }
        if ((mb_strlen($contract_address) < 34)) {
            throw new IAE('CancelSellAssetOnMarketplaceTronKMS.setContractAddress: $contract_address length must be >= 34');
        }
        $this->_data['contract_address'] = $contract_address;

        return $this;
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
     * @param string $from Address of the recipient of the fee for the trade.
     * @return $this
     */
    public function setFrom(string $from) {
        if ((mb_strlen($from) > 34)) {
            throw new IAE('CancelSellAssetOnMarketplaceTronKMS.setFrom: $from length must be <= 34');
        }
        if ((mb_strlen($from) < 34)) {
            throw new IAE('CancelSellAssetOnMarketplaceTronKMS.setFrom: $from length must be >= 34');
        }
        $this->_data['from'] = $from;

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
            throw new IAE('CancelSellAssetOnMarketplaceTronKMS.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get erc20_address
     *
     * @return string|null
     */
    public function getErc20Address(): ?string {
        return $this->_data["erc20_address"];
    }

    /**
     * Set erc20_address
     * 
     * @param string|null $erc20_address Optional address of the TRC20 token, which will be used as a selling currency of the NFT.
     * @return $this
     */
    public function setErc20Address(?string $erc20_address) {
        if (!is_null($erc20_address) && (mb_strlen($erc20_address) > 34)) {
            throw new IAE('CancelSellAssetOnMarketplaceTronKMS.setErc20Address: $erc20_address length must be <= 34');
        }
        if (!is_null($erc20_address) && (mb_strlen($erc20_address) < 34)) {
            throw new IAE('CancelSellAssetOnMarketplaceTronKMS.setErc20Address: $erc20_address length must be >= 34');
        }
        $this->_data['erc20_address'] = $erc20_address;

        return $this;
    }

    /**
     * Get from_private_key
     *
     * @return string|null
     */
    public function getFromPrivateKey(): ?string {
        return $this->_data["from_private_key"];
    }

    /**
     * Set from_private_key
     * 
     * @param string|null $from_private_key Private key of sender address. Private key, or signature Id must be present.
     * @return $this
     */
    public function setFromPrivateKey(?string $from_private_key) {
        if (!is_null($from_private_key) && (mb_strlen($from_private_key) > 64)) {
            throw new IAE('CancelSellAssetOnMarketplaceTronKMS.setFromPrivateKey: $from_private_key length must be <= 64');
        }
        if (!is_null($from_private_key) && (mb_strlen($from_private_key) < 64)) {
            throw new IAE('CancelSellAssetOnMarketplaceTronKMS.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

        return $this;
    }

    /**
     * Get fee_limit
     *
     * @return float
     */
    public function getFeeLimit(): float {
        return $this->_data["fee_limit"];
    }

    /**
     * Set fee_limit
     * 
     * @param float $fee_limit Fee in TRX to be paid.
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        if (($fee_limit < 0)) {
            throw new IAE('CancelSellAssetOnMarketplaceTronKMS.setFeeLimit: $fee_limit must be >=0');
        }
        $this->_data['fee_limit'] = $fee_limit;

        return $this;
    }
}
