<?php

/**
 * AdaTransactionFromUTXO_fromUTXO_inner Model
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
 * AdaTransactionFromUTXO_fromUTXO_inner Model
 */
class AdaTransactionFromUTXOFromUTXOInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaTransactionFromUTXO_fromUTXO_inner";
    protected static $_definition = [
        "tx_hash" => ["txHash", "string", null, "getTxHash", "setTxHash"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey"]
    ];

    /**
     * AdaTransactionFromUTXOFromUTXOInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["tx_hash"=>null, "index"=>null, "private_key"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['tx_hash'])) {
            $ip[] = "'tx_hash' can't be null";
        }
        if ((mb_strlen($this->_data['tx_hash']) > 64)) {
            $ip[] = "'tx_hash' length must be <= 64";
        }
        if ((mb_strlen($this->_data['tx_hash']) < 64)) {
            $ip[] = "'tx_hash' length must be >= 64";
        }
        if (is_null($this->_data['index'])) {
            $ip[] = "'index' can't be null";
        }
        if (($this->_data['index'] > 2147483647)) {
            $ip[] = "'index' must be <= 2147483647";
        }
        if (($this->_data['index'] < 0)) {
            $ip[] = "'index' must be >= 0";
        }
        if (is_null($this->_data['private_key'])) {
            $ip[] = "'private_key' can't be null";
        }
        if ((mb_strlen($this->_data['private_key']) > 52)) {
            $ip[] = "'private_key' length must be <= 52";
        }
        if ((mb_strlen($this->_data['private_key']) < 52)) {
            $ip[] = "'private_key' length must be >= 52";
        }
        
        return $ip;
    }

    /**
     * Get tx_hash
     *
     * @return string
     */
    public function getTxHash(): string {
        return $this->_data["tx_hash"];
    }

    /**
     * Set tx_hash
     * 
     * @param string $tx_hash The transaction hash of the UTXO to be spent
     * @return $this
     */
    public function setTxHash(string $tx_hash) {
        if ((mb_strlen($tx_hash) > 64)) {
            throw new IAE('AdaTransactionFromUTXOFromUTXOInner.setTxHash: $tx_hash length must be <= 64');
        }
        if ((mb_strlen($tx_hash) < 64)) {
            throw new IAE('AdaTransactionFromUTXOFromUTXOInner.setTxHash: $tx_hash length must be >= 64');
        }
        $this->_data['tx_hash'] = $tx_hash;

        return $this;
    }

    /**
     * Get index
     *
     * @return float
     */
    public function getIndex(): float {
        return $this->_data["index"];
    }

    /**
     * Set index
     * 
     * @param float $index The index of the UTXO to be spent
     * @return $this
     */
    public function setIndex(float $index) {
        if (($index > 2147483647)) {
            throw new IAE('AdaTransactionFromUTXOFromUTXOInner.setIndex: $index must be <=2147483647');
        }
        if (($index < 0)) {
            throw new IAE('AdaTransactionFromUTXOFromUTXOInner.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

        return $this;
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey(): string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key The private key of the blockchain address that holds the UTXO to be spent
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        if ((mb_strlen($private_key) > 52)) {
            throw new IAE('AdaTransactionFromUTXOFromUTXOInner.setPrivateKey: $private_key length must be <= 52');
        }
        if ((mb_strlen($private_key) < 52)) {
            throw new IAE('AdaTransactionFromUTXOFromUTXOInner.setPrivateKey: $private_key length must be >= 52');
        }
        $this->_data['private_key'] = $private_key;

        return $this;
    }
}
