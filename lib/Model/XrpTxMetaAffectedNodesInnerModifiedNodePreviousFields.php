<?php

/**
 * XrpTx_meta_AffectedNodes_inner_ModifiedNode_PreviousFields Model
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
 * XrpTx_meta_AffectedNodes_inner_ModifiedNode_PreviousFields Model
 */
class XrpTxMetaAffectedNodesInnerModifiedNodePreviousFields extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpTx_meta_AffectedNodes_inner_ModifiedNode_PreviousFields";
    protected static $_definition = [
        "balance" => ["Balance", "string", null, "getBalance", "setBalance"], 
        "sequence" => ["Sequence", "float", null, "getSequence", "setSequence"]
    ];

    /**
     * XrpTxMetaAffectedNodesInnerModifiedNodePreviousFields
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["balance"=>null, "sequence"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['balance'])) {
            $ip[] = "'balance' can't be null";
        }
        if (is_null($this->_data['sequence'])) {
            $ip[] = "'sequence' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get balance
     *
     * @return string
     */
    public function getBalance(): string {
        return $this->_data["balance"];
    }

    /**
     * Set balance
     * 
     * @param string $balance balance
     * @return $this
     */
    public function setBalance(string $balance) {
        $this->_data['balance'] = $balance;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return float
     */
    public function getSequence(): float {
        return $this->_data["sequence"];
    }

    /**
     * Set sequence
     * 
     * @param float $sequence sequence
     * @return $this
     */
    public function setSequence(float $sequence) {
        $this->_data['sequence'] = $sequence;

        return $this;
    }
}
