<?php

/**
 * BidOnAuctionCelo Model
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
 * BidOnAuctionCelo Model
 */
class BidOnAuctionCelo extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_CELO = 'CELO';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "BidOnAuctionCelo";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency"], 
        "contract_address" => ["contractAddress", "string", null, "getContractAddress", "setContractAddress"], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address"], 
        "bidder" => ["bidder", "string", null, "getBidder", "setBidder"], 
        "id" => ["id", "string", null, "getId", "setId"], 
        "bid_value" => ["bidValue", "string", null, "getBidValue", "setBidValue"], 
        "from_private_key" => ["fromPrivateKey", "string", null, "getFromPrivateKey", "setFromPrivateKey"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee" => ["fee", "\Tatum\Model\DeployErc20Fee", null, "getFee", "setFee"]
    ];

    /**
     * BidOnAuctionCelo
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "fee_currency"=>null, "contract_address"=>null, "erc20_address"=>null, "bidder"=>null, "id"=>null, "bid_value"=>null, "from_private_key"=>null, "nonce"=>null, "fee"=>null] as $k => $v) {
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
        if (is_null($this->_data['fee_currency'])) {
            $ip[] = "'fee_currency' can't be null";
        }
        $allowed = $this->getFeeCurrencyAllowableValues();
        $value = $this->_data['fee_currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'fee_currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
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
        if (!is_null($this->_data['erc20_address']) && (mb_strlen($this->_data['erc20_address']) > 42)) {
            $ip[] = "'erc20_address' length must be <= 42";
        }
        if (!is_null($this->_data['erc20_address']) && (mb_strlen($this->_data['erc20_address']) < 42)) {
            $ip[] = "'erc20_address' length must be >= 42";
        }
        if (!is_null($this->_data['bidder']) && (mb_strlen($this->_data['bidder']) > 42)) {
            $ip[] = "'bidder' length must be <= 42";
        }
        if (!is_null($this->_data['bidder']) && (mb_strlen($this->_data['bidder']) < 42)) {
            $ip[] = "'bidder' length must be >= 42";
        }
        if (is_null($this->_data['id'])) {
            $ip[] = "'id' can't be null";
        }
        if ((mb_strlen($this->_data['id']) > 200)) {
            $ip[] = "'id' length must be <= 200";
        }
        if ((mb_strlen($this->_data['id']) < 1)) {
            $ip[] = "'id' length must be >= 1";
        }
        if (is_null($this->_data['bid_value'])) {
            $ip[] = "'bid_value' can't be null";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['bid_value'])) {
            $ip[] = "'bid_value' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
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
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getChainAllowableValues(): array {
        return [
            self::CHAIN_CELO,
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
     * @param string $chain Blockchain to work with.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("BidOnAuctionCelo.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get fee_currency
     *
     * @return string
     */
    public function getFeeCurrency(): string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string $fee_currency The currency in which the transaction fee will be paid
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        $allowed = $this->getFeeCurrencyAllowableValues();
        if (!in_array($fee_currency, $allowed, true)) {
            throw new IAE(sprintf("BidOnAuctionCelo.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
        }
        $this->_data['fee_currency'] = $fee_currency;

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
     * @param string $contract_address Address of the auction smart contract.
     * @return $this
     */
    public function setContractAddress(string $contract_address) {
        if ((mb_strlen($contract_address) > 42)) {
            throw new IAE('BidOnAuctionCelo.setContractAddress: $contract_address length must be <= 42');
        }
        if ((mb_strlen($contract_address) < 42)) {
            throw new IAE('BidOnAuctionCelo.setContractAddress: $contract_address length must be >= 42');
        }
        $this->_data['contract_address'] = $contract_address;

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
     * @param string|null $erc20_address Optional address of the ERC20 token, which will be used as a selling currency of the NFT.
     * @return $this
     */
    public function setErc20Address(?string $erc20_address) {
        if (!is_null($erc20_address) && (mb_strlen($erc20_address) > 42)) {
            throw new IAE('BidOnAuctionCelo.setErc20Address: $erc20_address length must be <= 42');
        }
        if (!is_null($erc20_address) && (mb_strlen($erc20_address) < 42)) {
            throw new IAE('BidOnAuctionCelo.setErc20Address: $erc20_address length must be >= 42');
        }
        $this->_data['erc20_address'] = $erc20_address;

        return $this;
    }

    /**
     * Get bidder
     *
     * @return string|null
     */
    public function getBidder(): ?string {
        return $this->_data["bidder"];
    }

    /**
     * Set bidder
     * 
     * @param string|null $bidder In case of the ERC20 auction, it's possible to bid on behalf of someone else. This value is the address of the bidder, which should approve spending of the ERC20 tokens for the Auction contract. This could be used for a bidding from the custodial wallet address.
     * @return $this
     */
    public function setBidder(?string $bidder) {
        if (!is_null($bidder) && (mb_strlen($bidder) > 42)) {
            throw new IAE('BidOnAuctionCelo.setBidder: $bidder length must be <= 42');
        }
        if (!is_null($bidder) && (mb_strlen($bidder) < 42)) {
            throw new IAE('BidOnAuctionCelo.setBidder: $bidder length must be >= 42');
        }
        $this->_data['bidder'] = $bidder;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId(): string {
        return $this->_data["id"];
    }

    /**
     * Set id
     * 
     * @param string $id ID of the auction.
     * @return $this
     */
    public function setId(string $id) {
        if ((mb_strlen($id) > 200)) {
            throw new IAE('BidOnAuctionCelo.setId: $id length must be <= 200');
        }
        if ((mb_strlen($id) < 1)) {
            throw new IAE('BidOnAuctionCelo.setId: $id length must be >= 1');
        }
        $this->_data['id'] = $id;

        return $this;
    }

    /**
     * Get bid_value
     *
     * @return string
     */
    public function getBidValue(): string {
        return $this->_data["bid_value"];
    }

    /**
     * Set bid_value
     * 
     * @param string $bid_value Amount of the assets to be bid. This must include auction fee.
     * @return $this
     */
    public function setBidValue(string $bid_value) {
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $bid_value))) {
            throw new IAE('BidOnAuctionCelo.setBidValue: $bid_value must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($bid_value, true) . ' given');
        }
        $this->_data['bid_value'] = $bid_value;

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
            throw new IAE('BidOnAuctionCelo.setFromPrivateKey: $from_private_key length must be <= 66');
        }
        if ((mb_strlen($from_private_key) < 66)) {
            throw new IAE('BidOnAuctionCelo.setFromPrivateKey: $from_private_key length must be >= 66');
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
