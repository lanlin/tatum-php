<?php

/**
 * FlowTx_payloadSignatures_inner Model
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
 * FlowTx_payloadSignatures_inner Model
 */
class FlowTxPayloadSignaturesInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "FlowTx_payloadSignatures_inner";
    protected static $_definition = [
        "address" => ["address", "string", null, "getAddress", "setAddress"], 
        "key_id" => ["keyId", "float", null, "getKeyId", "setKeyId"], 
        "signature" => ["signature", "string", null, "getSignature", "setSignature"]
    ];

    /**
     * FlowTxPayloadSignaturesInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["address"=>null, "key_id"=>null, "signature"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }

    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress(): ?string {
        return $this->_data["address"];
    }

    /**
     * Set address
     * 
     * @param string|null $address address
     * @return $this
     */
    public function setAddress(?string $address) {
        $this->_data['address'] = $address;

        return $this;
    }

    /**
     * Get key_id
     *
     * @return float|null
     */
    public function getKeyId(): ?float {
        return $this->_data["key_id"];
    }

    /**
     * Set key_id
     * 
     * @param float|null $key_id key_id
     * @return $this
     */
    public function setKeyId(?float $key_id) {
        $this->_data['key_id'] = $key_id;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string|null
     */
    public function getSignature(): ?string {
        return $this->_data["signature"];
    }

    /**
     * Set signature
     * 
     * @param string|null $signature signature
     * @return $this
     */
    public function setSignature(?string $signature) {
        $this->_data['signature'] = $signature;

        return $this;
    }
}
