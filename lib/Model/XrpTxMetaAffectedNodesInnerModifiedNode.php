<?php

/**
 * XrpTx_meta_AffectedNodes_inner_ModifiedNode Model
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
 * XrpTx_meta_AffectedNodes_inner_ModifiedNode Model
 */
class XrpTxMetaAffectedNodesInnerModifiedNode extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpTx_meta_AffectedNodes_inner_ModifiedNode";
    protected static $_definition = [
        "final_fields" => ["FinalFields", "\Tatum\Model\XrpTxMetaAffectedNodesInnerModifiedNodeFinalFields", null, "getFinalFields", "setFinalFields"], 
        "ledger_entry_type" => ["LedgerEntryType", "string", null, "getLedgerEntryType", "setLedgerEntryType"], 
        "ledger_index" => ["LedgerIndex", "string", null, "getLedgerIndex", "setLedgerIndex"], 
        "previous_fields" => ["PreviousFields", "\Tatum\Model\XrpTxMetaAffectedNodesInnerModifiedNodePreviousFields", null, "getPreviousFields", "setPreviousFields"], 
        "previous_txn_id" => ["PreviousTxnID", "string", null, "getPreviousTxnId", "setPreviousTxnId"], 
        "previous_txn_lgr_seq" => ["PreviousTxnLgrSeq", "float", null, "getPreviousTxnLgrSeq", "setPreviousTxnLgrSeq"]
    ];

    /**
     * XrpTxMetaAffectedNodesInnerModifiedNode
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["final_fields"=>null, "ledger_entry_type"=>null, "ledger_index"=>null, "previous_fields"=>null, "previous_txn_id"=>null, "previous_txn_lgr_seq"=>null] as $k => $v) {
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
     * Get final_fields
     *
     * @return \Tatum\Model\XrpTxMetaAffectedNodesInnerModifiedNodeFinalFields|null
     */
    public function getFinalFields(): ?\Tatum\Model\XrpTxMetaAffectedNodesInnerModifiedNodeFinalFields {
        return $this->_data["final_fields"];
    }

    /**
     * Set final_fields
     * 
     * @param \Tatum\Model\XrpTxMetaAffectedNodesInnerModifiedNodeFinalFields|null $final_fields final_fields
     * @return $this
     */
    public function setFinalFields(?\Tatum\Model\XrpTxMetaAffectedNodesInnerModifiedNodeFinalFields $final_fields) {
        $this->_data['final_fields'] = $final_fields;

        return $this;
    }

    /**
     * Get ledger_entry_type
     *
     * @return string|null
     */
    public function getLedgerEntryType(): ?string {
        return $this->_data["ledger_entry_type"];
    }

    /**
     * Set ledger_entry_type
     * 
     * @param string|null $ledger_entry_type ledger_entry_type
     * @return $this
     */
    public function setLedgerEntryType(?string $ledger_entry_type) {
        $this->_data['ledger_entry_type'] = $ledger_entry_type;

        return $this;
    }

    /**
     * Get ledger_index
     *
     * @return string|null
     */
    public function getLedgerIndex(): ?string {
        return $this->_data["ledger_index"];
    }

    /**
     * Set ledger_index
     * 
     * @param string|null $ledger_index ledger_index
     * @return $this
     */
    public function setLedgerIndex(?string $ledger_index) {
        $this->_data['ledger_index'] = $ledger_index;

        return $this;
    }

    /**
     * Get previous_fields
     *
     * @return \Tatum\Model\XrpTxMetaAffectedNodesInnerModifiedNodePreviousFields|null
     */
    public function getPreviousFields(): ?\Tatum\Model\XrpTxMetaAffectedNodesInnerModifiedNodePreviousFields {
        return $this->_data["previous_fields"];
    }

    /**
     * Set previous_fields
     * 
     * @param \Tatum\Model\XrpTxMetaAffectedNodesInnerModifiedNodePreviousFields|null $previous_fields previous_fields
     * @return $this
     */
    public function setPreviousFields(?\Tatum\Model\XrpTxMetaAffectedNodesInnerModifiedNodePreviousFields $previous_fields) {
        $this->_data['previous_fields'] = $previous_fields;

        return $this;
    }

    /**
     * Get previous_txn_id
     *
     * @return string|null
     */
    public function getPreviousTxnId(): ?string {
        return $this->_data["previous_txn_id"];
    }

    /**
     * Set previous_txn_id
     * 
     * @param string|null $previous_txn_id previous_txn_id
     * @return $this
     */
    public function setPreviousTxnId(?string $previous_txn_id) {
        $this->_data['previous_txn_id'] = $previous_txn_id;

        return $this;
    }

    /**
     * Get previous_txn_lgr_seq
     *
     * @return float|null
     */
    public function getPreviousTxnLgrSeq(): ?float {
        return $this->_data["previous_txn_lgr_seq"];
    }

    /**
     * Set previous_txn_lgr_seq
     * 
     * @param float|null $previous_txn_lgr_seq previous_txn_lgr_seq
     * @return $this
     */
    public function setPreviousTxnLgrSeq(?float $previous_txn_lgr_seq) {
        $this->_data['previous_txn_lgr_seq'] = $previous_txn_lgr_seq;

        return $this;
    }
}
