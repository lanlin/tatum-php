<?php

/**
 * SolanaTx Model
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
 * SolanaTx Model
 */
class SolanaTx extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "SolanaTx";
    protected static $_definition = [
        "block_time" => ["blockTime", "float", null, "getBlockTime", "setBlockTime"], 
        "meta" => ["meta", "\Tatum\Model\SolanaTxMeta", null, "getMeta", "setMeta"], 
        "transaction" => ["transaction", "\Tatum\Model\SolanaTxTransaction", null, "getTransaction", "setTransaction"], 
        "slot" => ["slot", "float", null, "getSlot", "setSlot"]
    ];

    /**
     * SolanaTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["block_time"=>null, "meta"=>null, "transaction"=>null, "slot"=>null] as $k => $v) {
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
     * Get block_time
     *
     * @return float|null
     */
    public function getBlockTime(): ?float {
        return $this->_data["block_time"];
    }

    /**
     * Set block_time
     * 
     * @param float|null $block_time block_time
     * @return $this
     */
    public function setBlockTime(?float $block_time) {
        $this->_data['block_time'] = $block_time;

        return $this;
    }

    /**
     * Get meta
     *
     * @return \Tatum\Model\SolanaTxMeta|null
     */
    public function getMeta(): ?\Tatum\Model\SolanaTxMeta {
        return $this->_data["meta"];
    }

    /**
     * Set meta
     * 
     * @param \Tatum\Model\SolanaTxMeta|null $meta meta
     * @return $this
     */
    public function setMeta(?\Tatum\Model\SolanaTxMeta $meta) {
        $this->_data['meta'] = $meta;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return \Tatum\Model\SolanaTxTransaction|null
     */
    public function getTransaction(): ?\Tatum\Model\SolanaTxTransaction {
        return $this->_data["transaction"];
    }

    /**
     * Set transaction
     * 
     * @param \Tatum\Model\SolanaTxTransaction|null $transaction transaction
     * @return $this
     */
    public function setTransaction(?\Tatum\Model\SolanaTxTransaction $transaction) {
        $this->_data['transaction'] = $transaction;

        return $this;
    }

    /**
     * Get slot
     *
     * @return float|null
     */
    public function getSlot(): ?float {
        return $this->_data["slot"];
    }

    /**
     * Set slot
     * 
     * @param float|null $slot slot
     * @return $this
     */
    public function setSlot(?float $slot) {
        $this->_data['slot'] = $slot;

        return $this;
    }
}
