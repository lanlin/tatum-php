<?php

/**
 * EstimateFeeDeployCustodialWallet Model
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
 * EstimateFeeDeployCustodialWallet Model
 */
class EstimateFeeDeployCustodialWallet extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const CHAIN_CELO = 'CELO';
    public const CHAIN_ETH = 'ETH';
    public const CHAIN_BSC = 'BSC';
    public const CHAIN_XDC = 'XDC';
    public const CHAIN_ONE = 'ONE';
    public const CHAIN_MATIC = 'MATIC';
    public const CHAIN_KLAY = 'KLAY';
    public const TYPE_DEPLOY_CUSTODIAL_WALLET_BATCH = 'DEPLOY_CUSTODIAL_WALLET_BATCH';
    protected static $_name = "EstimateFeeDeployCustodialWallet";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain"], 
        "type" => ["type", "string", null, "getType", "setType"], 
        "batch_count" => ["batchCount", "float", null, "getBatchCount", "setBatchCount"]
    ];

    /**
     * EstimateFeeDeployCustodialWallet
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["chain"=>null, "type"=>null, "batch_count"=>null] as $k => $v) {
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
        if (is_null($this->_data['type'])) {
            $ip[] = "'type' can't be null";
        }
        $allowed = $this->getTypeAllowableValues();
        $value = $this->_data['type'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'type' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if (is_null($this->_data['batch_count'])) {
            $ip[] = "'batch_count' can't be null";
        }
        if (($this->_data['batch_count'] > 300)) {
            $ip[] = "'batch_count' must be <= 300";
        }
        if (($this->_data['batch_count'] < 1)) {
            $ip[] = "'batch_count' must be >= 1";
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
            self::CHAIN_ETH,
            self::CHAIN_BSC,
            self::CHAIN_XDC,
            self::CHAIN_ONE,
            self::CHAIN_MATIC,
            self::CHAIN_KLAY,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getTypeAllowableValues(): array {
        return [
            self::TYPE_DEPLOY_CUSTODIAL_WALLET_BATCH,
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
     * @param string $chain Blockchain to estimate fee for.
     * @return $this
     */
    public function setChain(string $chain) {
        $allowed = $this->getChainAllowableValues();
        if (!in_array($chain, $allowed, true)) {
            throw new IAE(sprintf("EstimateFeeDeployCustodialWallet.setChain: chain invalid value '%s', must be one of '%s'", $chain, implode("', '", $allowed)));
        }
        $this->_data['chain'] = $chain;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string $type Type of transaction
     * @return $this
     */
    public function setType(string $type) {
        $allowed = $this->getTypeAllowableValues();
        if (!in_array($type, $allowed, true)) {
            throw new IAE(sprintf("EstimateFeeDeployCustodialWallet.setType: type invalid value '%s', must be one of '%s'", $type, implode("', '", $allowed)));
        }
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get batch_count
     *
     * @return float
     */
    public function getBatchCount(): float {
        return $this->_data["batch_count"];
    }

    /**
     * Set batch_count
     * 
     * @param float $batch_count Number of addresses to create
     * @return $this
     */
    public function setBatchCount(float $batch_count) {
        if (($batch_count > 300)) {
            throw new IAE('EstimateFeeDeployCustodialWallet.setBatchCount: $batch_count must be <=300');
        }
        if (($batch_count < 1)) {
            throw new IAE('EstimateFeeDeployCustodialWallet.setBatchCount: $batch_count must be >=1');
        }
        $this->_data['batch_count'] = $batch_count;

        return $this;
    }
}
