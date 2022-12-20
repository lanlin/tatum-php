<?php

/**
 * BroadcastKMS Model
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
 * BroadcastKMS Model
 */
class BroadcastKMS extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BroadcastKMS";
    protected static $_definition = [
        "tx_data" => ["txData", "string", null, "getTxData", "setTxData"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * BroadcastKMS
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["tx_data"=>null, "signature_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['tx_data'])) {
            $ip[] = "'tx_data' can't be null";
        }
        if ((mb_strlen($this->_data['tx_data']) > 500000)) {
            $ip[] = "'tx_data' length must be <= 500000";
        }
        if ((mb_strlen($this->_data['tx_data']) < 1)) {
            $ip[] = "'tx_data' length must be >= 1";
        }
        
        return $ip;
    }

    /**
     * Get tx_data
     *
     * @return string
     */
    public function getTxData(): string {
        return $this->_data["tx_data"];
    }

    /**
     * Set tx_data
     * 
     * @param string $tx_data Raw signed transaction to be published to network.
     * @return $this
     */
    public function setTxData(string $tx_data) {
        if ((mb_strlen($tx_data) > 500000)) {
            throw new IAE('BroadcastKMS.setTxData: $tx_data length must be <= 500000');
        }
        if ((mb_strlen($tx_data) < 1)) {
            throw new IAE('BroadcastKMS.setTxData: $tx_data length must be >= 1');
        }
        $this->_data['tx_data'] = $tx_data;

        return $this;
    }

    /**
     * Get signature_id
     *
     * @return string|null
     */
    public function getSignatureId(): ?string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string|null $signature_id ID of prepared payment template to sign. Required only, when broadcasting transaction signed by Tatum KMS.
     * @return $this
     */
    public function setSignatureId(?string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
