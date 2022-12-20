<?php

/**
 * BtcTransactionFromUTXOKMSSource Model
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
 * BtcTransactionFromUTXOKMSSource Model
 */
class BtcTransactionFromUTXOKMSSource extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BtcTransactionFromUTXOKMSSource";
    protected static $_definition = [
        "tx_hash" => ["txHash", "string", null, "getTxHash", "setTxHash"], 
        "index" => ["index", "float", null, "getIndex", "setIndex"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * BtcTransactionFromUTXOKMSSource
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["tx_hash"=>null, "index"=>null, "signature_id"=>null] as $k => $v) {
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
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
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
            throw new IAE('BtcTransactionFromUTXOKMSSource.setTxHash: $tx_hash length must be <= 64');
        }
        if ((mb_strlen($tx_hash) < 64)) {
            throw new IAE('BtcTransactionFromUTXOKMSSource.setTxHash: $tx_hash length must be >= 64');
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
            throw new IAE('BtcTransactionFromUTXOKMSSource.setIndex: $index must be <=2147483647');
        }
        if (($index < 0)) {
            throw new IAE('BtcTransactionFromUTXOKMSSource.setIndex: $index must be >=0');
        }
        $this->_data['index'] = $index;

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
     * @param string $signature_id The KMS identifier of the private key of the blockchain address that holds the UTXO to be spent
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
