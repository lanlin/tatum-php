<?php

/**
 * ActivateGasPumpAddresses_request Model
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
 * ActivateGasPumpAddresses_request Model
 */
class ActivateGasPumpAddressesRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_TRON = 'TRON';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "ActivateGasPumpAddresses_request";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "owner" => ["owner", "string", null, "getOwner", "setOwner"], 
        "from" => ["from", "int", null, "getFrom", "setFrom"], 
        "to" => ["to", "int", null, "getTo", "setTo"], 
        "fees_covered" => ["feesCovered", "bool", null, "getFeesCovered", "setFeesCovered"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency"], 
        "fee_limit" => ["feeLimit", "float", null, "getFeeLimit", "setFeeLimit"]
    ];

    /**
     * ActivateGasPumpAddressesRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "owner"=>null, "from"=>null, "to"=>null, "fees_covered"=>null, "from_private_key"=>null, "signature_id"=>null, "index"=>null, "fee_currency"=>null, "fee_limit"=>null] as $k => $v) {
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
        if (is_null($this->_data['owner'])) {
            $ip[] = "'owner' can't be null";
        }
        if (is_null($this->_data['from'])) {
            $ip[] = "'from' can't be null";
        }
        if (($this->_data['from'] < 0)) {
            $ip[] = "'from' must be >= 0";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        if (($this->_data['to'] < 0)) {
            $ip[] = "'to' must be >= 0";
        }
        if (is_null($this->_data['fees_covered'])) {
            $ip[] = "'fees_covered' can't be null";
        }
        if (is_null($this->_data['from_private_key'])) {
            $ip[] = "'from_private_key' can't be null";
        }
        if ((mb_strlen($this->_data['from_private_key']) > 64)) {
            $ip[] = "'from_private_key' length must be <= 64";
        }
        if ((mb_strlen($this->_data['from_private_key']) < 64)) {
            $ip[] = "'from_private_key' length must be >= 64";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        if (!is_null($this->_data['index']) && ($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        $allowed = $this->getFeeCurrencyAllowableValues();
        $value = $this->_data['fee_currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'fee_currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['fee_limit'])) {
            $ip[] = "'fee_limit' can't be null";
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
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getFeeCurrencyAllowableValues(): array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
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
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("ActivateGasPumpAddressesRequest.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner(): string {
        return $this->_data["owner"];
    }

    /**
     * Set owner
     * 
     * @param string $owner The blockchain address that owns the precalculated gas pump addresses and is used to pay gas fees for operations made on the gas pump addresses; can be referred to as \"master address\"
     * @return $this
     */
    public function setOwner(string $owner) {
        $this->_data['owner'] = $owner;

        return $this;
    }

    /**
     * Get from
     *
     * @return int
     */
    public function getFrom(): int {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param int $from The start index of the range of gas pump addresses to activate
     * @return $this
     */
    public function setFrom(int $from) {
        if (($from < 0)) {
            throw new IAE('ActivateGasPumpAddressesRequest.setFrom: $from must be >=0');
        }
        $this->_data['from'] = $from;

        return $this;
    }

    /**
     * Get to
     *
     * @return int
     */
    public function getTo(): int {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param int $to The end index of the range of gas pump addresses to activate; must be greater than or equal to the value in the <code>from</code> parameter
     * @return $this
     */
    public function setTo(int $to) {
        if (($to < 0)) {
            throw new IAE('ActivateGasPumpAddressesRequest.setTo: $to must be >=0');
        }
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get fees_covered
     *
     * @return bool
     */
    public function getFeesCovered(): bool {
        return $this->_data["fees_covered"];
    }

    /**
     * Set fees_covered
     * 
     * @param bool $fees_covered Set to \"true\" to cover the gas fee by credits from your monthly credit allowance.
     * @return $this
     */
    public function setFeesCovered(bool $fees_covered) {
        $this->_data['fees_covered'] = $fees_covered;

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
     * @param string $from_private_key The private key of the blockchain address that will pay the gas fee for the activation transaction
     * @return $this
     */
    public function setFromPrivateKey(string $from_private_key) {
        if ((mb_strlen($from_private_key) > 64)) {
            throw new IAE('ActivateGasPumpAddressesRequest.setFromPrivateKey: $from_private_key length must be <= 64');
        }
        if ((mb_strlen($from_private_key) < 64)) {
            throw new IAE('ActivateGasPumpAddressesRequest.setFromPrivateKey: $from_private_key length must be >= 64');
        }
        $this->_data['from_private_key'] = $from_private_key;

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
     * @param string $signature_id The KMS identifier of the private key of the blockchain address that will pay the gas fee for the activation transaction
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
     * @param float|null $index (Only if the signature ID is mnemonic-based) The index of the specific address from the mnemonic
     * @return $this
     */
    public function setIndex(?float $index) {
        if (!is_null($index) && ($index < 0)) {
            throw new IAE('ActivateGasPumpAddressesRequest.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get fee_currency
     *
     * @return string|null
     */
    public function getFeeCurrency(): ?string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string|null $fee_currency The currency to pay for the gas fee; if not set, defaults to CELO
     * @return $this
     */
    public function setFeeCurrency(?string $fee_currency) {
        $allowed = $this->getFeeCurrencyAllowableValues();
        if (!is_null($fee_currency) && !in_array($fee_currency, $allowed, true)) {
            throw new IAE(sprintf("ActivateGasPumpAddressesRequest.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
        }
        $this->_data['fee_currency'] = $fee_currency;

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
     * @param float $fee_limit The maximum amount to be paid as the gas fee (in TRX)
     * @return $this
     */
    public function setFeeLimit(float $fee_limit) {
        $this->_data['fee_limit'] = $fee_limit;

        return $this;
    }
}
