<?php

/**
 * MaticBalance Model
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
 * MaticBalance Model
 */
class MaticBalance extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "MaticBalance";
    protected static $_definition = [
        "balance" => ["balance", "string", null, "getBalance", "setBalance"]
    ];

    /**
     * MaticBalance
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["balance"=>null] as $k => $v) {
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
     * Get balance
     *
     * @return string|null
     */
    public function getBalance(): ?string {
        return $this->_data["balance"];
    }

    /**
     * Set balance
     * 
     * @param string|null $balance Balance in MATIC
     * @return $this
     */
    public function setBalance(?string $balance) {
        $this->_data['balance'] = $balance;

        return $this;
    }
}
