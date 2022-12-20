<?php

/**
 * LtcTx_inputs_inner Model
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
 * LtcTx_inputs_inner Model
 */
class LtcTxInputsInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "LtcTx_inputs_inner";
    protected static $_definition = [
        "prevout" => ["prevout", "\Tatum\Model\LtcTxInputsInnerPrevout", null, "getPrevout", "setPrevout"], 
        "script" => ["script", "string", null, "getScript", "setScript"], 
        "witness" => ["witness", "string", null, "getWitness", "setWitness"], 
        "sequence" => ["sequence", "float", null, "getSequence", "setSequence"], 
        "coin" => ["coin", "\Tatum\Model\LtcTxInputsInnerCoin", null, "getCoin", "setCoin"]
    ];

    /**
     * LtcTxInputsInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["prevout"=>null, "script"=>null, "witness"=>null, "sequence"=>null, "coin"=>null] as $k => $v) {
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
     * Get prevout
     *
     * @return \Tatum\Model\LtcTxInputsInnerPrevout|null
     */
    public function getPrevout(): ?\Tatum\Model\LtcTxInputsInnerPrevout {
        return $this->_data["prevout"];
    }

    /**
     * Set prevout
     * 
     * @param \Tatum\Model\LtcTxInputsInnerPrevout|null $prevout prevout
     * @return $this
     */
    public function setPrevout(?\Tatum\Model\LtcTxInputsInnerPrevout $prevout) {
        $this->_data['prevout'] = $prevout;

        return $this;
    }

    /**
     * Get script
     *
     * @return string|null
     */
    public function getScript(): ?string {
        return $this->_data["script"];
    }

    /**
     * Set script
     * 
     * @param string|null $script Data generated by a spender which is almost always used as variables to satisfy a pubkey script.
     * @return $this
     */
    public function setScript(?string $script) {
        $this->_data['script'] = $script;

        return $this;
    }

    /**
     * Get witness
     *
     * @return string|null
     */
    public function getWitness(): ?string {
        return $this->_data["witness"];
    }

    /**
     * Set witness
     * 
     * @param string|null $witness Transaction witness.
     * @return $this
     */
    public function setWitness(?string $witness) {
        $this->_data['witness'] = $witness;

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

    /**
     * Get coin
     *
     * @return \Tatum\Model\LtcTxInputsInnerCoin|null
     */
    public function getCoin(): ?\Tatum\Model\LtcTxInputsInnerCoin {
        return $this->_data["coin"];
    }

    /**
     * Set coin
     * 
     * @param \Tatum\Model\LtcTxInputsInnerCoin|null $coin coin
     * @return $this
     */
    public function setCoin(?\Tatum\Model\LtcTxInputsInnerCoin $coin) {
        $this->_data['coin'] = $coin;

        return $this;
    }
}
