<?php

/**
 * AlgoNodePostDriver_200_response Model
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
 * AlgoNodePostDriver_200_response Model
 */
class AlgoNodePostDriver200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AlgoNodePostDriver_200_response";
    protected static $_definition = [
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId"]
    ];

    /**
     * AlgoNodePostDriver200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["tx_id"=>null] as $k => $v) {
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
     * Get tx_id
     *
     * @return string|null
     */
    public function getTxId(): ?string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string|null $tx_id Check here - <a href=\"https://developer.algorand.org/docs/rest-apis/algod/v2/#rawtransaction-response-200\" target=\"_blank\">https://developer.algorand.org/docs/rest-apis/algod/v2/#rawtransaction-response-200</a>
     * @return $this
     */
    public function setTxId(?string $tx_id) {
        $this->_data['tx_id'] = $tx_id;

        return $this;
    }
}
