<?php

/**
 * BchTransferBlockchain_request Model
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
 * BchTransferBlockchain_request Model
 */
class BchTransferBlockchainRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BchTransferBlockchain_request";
    protected static $_definition = [
        "from_utxo" => ["fromUTXO", "\Tatum\Model\AdaTransactionFromUTXOKMSFromUTXOInner[]", null, "getFromUtxo", "setFromUtxo"], 
        "to" => ["to", "\Tatum\Model\BchTransactionToInner[]", null, "getTo", "setTo"], 
        "fee" => ["fee", "string", null, "getFee", "setFee"], 
        "change_address" => ["changeAddress", "string", null, "getChangeAddress", "setChangeAddress"]
    ];

    /**
     * BchTransferBlockchainRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from_utxo"=>null, "to"=>null, "fee"=>null, "change_address"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from_utxo'])) {
            $ip[] = "'from_utxo' can't be null";
        }
        if (is_null($this->_data['to'])) {
            $ip[] = "'to' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get from_utxo
     *
     * @return \Tatum\Model\AdaTransactionFromUTXOKMSFromUTXOInner[]
     */
    public function getFromUtxo(): array {
        return $this->_data["from_utxo"];
    }

    /**
     * Set from_utxo
     * 
     * @param \Tatum\Model\AdaTransactionFromUTXOKMSFromUTXOInner[] $from_utxo The array of transaction hashes, indexes of its UTXOs, and the signature IDs of the associated blockchain addresses
     * @return $this
     */
    public function setFromUtxo(array $from_utxo) {
        $this->_data['from_utxo'] = $from_utxo;

        return $this;
    }

    /**
     * Get to
     *
     * @return \Tatum\Model\BchTransactionToInner[]
     */
    public function getTo(): array {
        return $this->_data["to"];
    }

    /**
     * Set to
     * 
     * @param \Tatum\Model\BchTransactionToInner[] $to The array of blockchain addresses to send the assets to and the amounts that each address should receive (in BCH). The difference between the UTXOs calculated in the <code>fromUTXO</code> section and the total amount to receive calculated in the <code>to</code> section will be used as the gas fee. To explicitly specify the fee amount and the blockchain address where any extra funds remaining after covering the fee will be sent, set the <code>fee</code> and <code>changeAddress</code> parameters.
     * @return $this
     */
    public function setTo(array $to) {
        $this->_data['to'] = $to;

        return $this;
    }

    /**
     * Get fee
     *
     * @return string|null
     */
    public function getFee(): ?string {
        return $this->_data["fee"];
    }

    /**
     * Set fee
     * 
     * @param string|null $fee The fee to be paid for the transaction (in BCH); if you are using this parameter, you have to also use the <code>changeAddress</code> parameter because these two parameters only work together.
     * @return $this
     */
    public function setFee(?string $fee) {
        $this->_data['fee'] = $fee;

        return $this;
    }

    /**
     * Get change_address
     *
     * @return string|null
     */
    public function getChangeAddress(): ?string {
        return $this->_data["change_address"];
    }

    /**
     * Set change_address
     * 
     * @param string|null $change_address The blockchain address to send any extra assets remaning after covering the fee; if you are using this parameter, you have to also use the <code>fee</code> parameter because these two parameters only work together.
     * @return $this
     */
    public function setChangeAddress(?string $change_address) {
        $this->_data['change_address'] = $change_address;

        return $this;
    }
}
