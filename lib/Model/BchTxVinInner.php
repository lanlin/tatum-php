<?php

/**
 * BchTx_vin_inner Model
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
 * BchTx_vin_inner Model
 */
class BchTxVinInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BchTx_vin_inner";
    protected static $_definition = [
        "txid" => ["txid", "string", null, "getTxid", "setTxid"], 
        "vout" => ["vout", "float", null, "getVout", "setVout"], 
        "script_sig" => ["scriptSig", "\Tatum\Model\BchTxVinInnerScriptSig", null, "getScriptSig", "setScriptSig"], 
        "coinbase" => ["coinbase", "string", null, "getCoinbase", "setCoinbase"], 
        "sequence" => ["sequence", "float", null, "getSequence", "setSequence"]
    ];

    /**
     * BchTxVinInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["txid"=>null, "vout"=>null, "script_sig"=>null, "coinbase"=>null, "sequence"=>null] as $k => $v) {
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
     * Get txid
     *
     * @return string|null
     */
    public function getTxid(): ?string {
        return $this->_data["txid"];
    }

    /**
     * Set txid
     * 
     * @param string|null $txid txid
     * @return $this
     */
    public function setTxid(?string $txid) {
        $this->_data['txid'] = $txid;

        return $this;
    }

    /**
     * Get vout
     *
     * @return float|null
     */
    public function getVout(): ?float {
        return $this->_data["vout"];
    }

    /**
     * Set vout
     * 
     * @param float|null $vout vout
     * @return $this
     */
    public function setVout(?float $vout) {
        $this->_data['vout'] = $vout;

        return $this;
    }

    /**
     * Get script_sig
     *
     * @return \Tatum\Model\BchTxVinInnerScriptSig|null
     */
    public function getScriptSig(): ?\Tatum\Model\BchTxVinInnerScriptSig {
        return $this->_data["script_sig"];
    }

    /**
     * Set script_sig
     * 
     * @param \Tatum\Model\BchTxVinInnerScriptSig|null $script_sig script_sig
     * @return $this
     */
    public function setScriptSig(?\Tatum\Model\BchTxVinInnerScriptSig $script_sig) {
        $this->_data['script_sig'] = $script_sig;

        return $this;
    }

    /**
     * Get coinbase
     *
     * @return string|null
     */
    public function getCoinbase(): ?string {
        return $this->_data["coinbase"];
    }

    /**
     * Set coinbase
     * 
     * @param string|null $coinbase coinbase
     * @return $this
     */
    public function setCoinbase(?string $coinbase) {
        $this->_data['coinbase'] = $coinbase;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return float|null
     */
    public function getSequence(): ?float {
        return $this->_data["sequence"];
    }

    /**
     * Set sequence
     * 
     * @param float|null $sequence sequence
     * @return $this
     */
    public function setSequence(?float $sequence) {
        $this->_data['sequence'] = $sequence;

        return $this;
    }
}
