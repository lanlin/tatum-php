<?php

/**
 * AlgoNodePostDriver_request Model
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
 * AlgoNodePostDriver_request Model
 */
class AlgoNodePostDriverRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AlgoNodePostDriver_request";
    protected static $_definition = [
        "rawtxn" => ["rawtxn", "string", null, "getRawtxn", "setRawtxn"]
    ];

    /**
     * AlgoNodePostDriverRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["rawtxn"=>null] as $k => $v) {
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
     * Get rawtxn
     *
     * @return string|null
     */
    public function getRawtxn(): ?string {
        return $this->_data["rawtxn"];
    }

    /**
     * Set rawtxn
     * 
     * @param string|null $rawtxn Check here - <a href=\"https://developer.algorand.org/docs/rest-apis/algod/v2/#post-v2transactions\" target=\"_blank\">https://developer.algorand.org/docs/rest-apis/algod/v2/#post-v2transactions</a>
     * @return $this
     */
    public function setRawtxn(?string $rawtxn) {
        $this->_data['rawtxn'] = $rawtxn;

        return $this;
    }
}
