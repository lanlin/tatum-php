<?php

/**
 * XrpAccountTx Model
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
 * XrpAccountTx Model
 */
class XrpAccountTx extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpAccountTx";
    protected static $_definition = [
        "account" => ["account", "string", null, "getAccount", "setAccount"], 
        "ledger_index_max" => ["ledger_index_max", "float", null, "getLedgerIndexMax", "setLedgerIndexMax"], 
        "ledger_index_min" => ["ledger_index_min", "float", null, "getLedgerIndexMin", "setLedgerIndexMin"], 
        "marker" => ["marker", "\Tatum\Model\XrpAccountTxMarker", null, "getMarker", "setMarker"], 
        "transactions" => ["transactions", "\Tatum\Model\XrpAccountTxTransactionsInner[]", null, "getTransactions", "setTransactions"]
    ];

    /**
     * XrpAccountTx
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["account"=>null, "ledger_index_max"=>null, "ledger_index_min"=>null, "marker"=>null, "transactions"=>null] as $k => $v) {
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
     * Get account
     *
     * @return string|null
     */
    public function getAccount(): ?string {
        return $this->_data["account"];
    }

    /**
     * Set account
     * 
     * @param string|null $account Unique Address identifying the related account.
     * @return $this
     */
    public function setAccount(?string $account) {
        $this->_data['account'] = $account;

        return $this;
    }

    /**
     * Get ledger_index_max
     *
     * @return float|null
     */
    public function getLedgerIndexMax(): ?float {
        return $this->_data["ledger_index_max"];
    }

    /**
     * Set ledger_index_max
     * 
     * @param float|null $ledger_index_max The ledger index of the earliest ledger actually searched for transactions.
     * @return $this
     */
    public function setLedgerIndexMax(?float $ledger_index_max) {
        $this->_data['ledger_index_max'] = $ledger_index_max;

        return $this;
    }

    /**
     * Get ledger_index_min
     *
     * @return float|null
     */
    public function getLedgerIndexMin(): ?float {
        return $this->_data["ledger_index_min"];
    }

    /**
     * Set ledger_index_min
     * 
     * @param float|null $ledger_index_min The ledger index of the most recent ledger actually searched for transactions.
     * @return $this
     */
    public function setLedgerIndexMin(?float $ledger_index_min) {
        $this->_data['ledger_index_min'] = $ledger_index_min;

        return $this;
    }

    /**
     * Get marker
     *
     * @return \Tatum\Model\XrpAccountTxMarker|null
     */
    public function getMarker(): ?\Tatum\Model\XrpAccountTxMarker {
        return $this->_data["marker"];
    }

    /**
     * Set marker
     * 
     * @param \Tatum\Model\XrpAccountTxMarker|null $marker marker
     * @return $this
     */
    public function setMarker(?\Tatum\Model\XrpAccountTxMarker $marker) {
        $this->_data['marker'] = $marker;

        return $this;
    }

    /**
     * Get transactions
     *
     * @return \Tatum\Model\XrpAccountTxTransactionsInner[]|null
     */
    public function getTransactions(): ?array {
        return $this->_data["transactions"];
    }

    /**
     * Set transactions
     * 
     * @param \Tatum\Model\XrpAccountTxTransactionsInner[]|null $transactions Array of transactions matching the request's criteria, as explained below.
     * @return $this
     */
    public function setTransactions(?array $transactions) {
        $this->_data['transactions'] = $transactions;

        return $this;
    }
}
