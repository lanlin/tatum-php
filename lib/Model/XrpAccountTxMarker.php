<?php

/**
 * XrpAccountTx_marker Model
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
 * XrpAccountTx_marker Model
 * 
 * @description Server-defined value indicating the response is paginated. Pass this to the next call to resume where this call left off.
 */
class XrpAccountTxMarker extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpAccountTx_marker";
    protected static $_definition = [
        "ledger" => ["ledger", "float", null, "getLedger", "setLedger"], 
        "seq" => ["seq", "float", null, "getSeq", "setSeq"]
    ];

    /**
     * XrpAccountTxMarker
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["ledger"=>null, "seq"=>null] as $k => $v) {
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
     * Get ledger
     *
     * @return float|null
     */
    public function getLedger(): ?float {
        return $this->_data["ledger"];
    }

    /**
     * Set ledger
     * 
     * @param float|null $ledger ledger
     * @return $this
     */
    public function setLedger(?float $ledger) {
        $this->_data['ledger'] = $ledger;

        return $this;
    }

    /**
     * Get seq
     *
     * @return float|null
     */
    public function getSeq(): ?float {
        return $this->_data["seq"];
    }

    /**
     * Set seq
     * 
     * @param float|null $seq seq
     * @return $this
     */
    public function setSeq(?float $seq) {
        $this->_data['seq'] = $seq;

        return $this;
    }
}
