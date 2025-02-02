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
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * XrpAccountTx_marker Model
 * 
 * @description Server-defined value indicating the response is paginated. Pass this to the next call to resume where this call left off.
 */
class XrpAccountTxMarker extends AbstractModel {

    public const _D = null;
    protected static $_name = "XrpAccountTx_marker";
    protected static $_definition = [
        "ledger" => ["ledger", "float", null, "getLedger", "setLedger", null, ["r" => 0]], 
        "seq" => ["seq", "float", null, "getSeq", "setSeq", null, ["r" => 0]]
    ];

    /**
     * XrpAccountTxMarker
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLedger(?float $ledger) {
        return $this->_set("ledger", $ledger);
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
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSeq(?float $seq) {
        return $this->_set("seq", $seq);
    }
}
