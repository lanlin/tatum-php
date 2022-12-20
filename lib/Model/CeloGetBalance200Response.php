<?php

/**
 * CeloGetBalance_200_response Model
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
 * CeloGetBalance_200_response Model
 */
class CeloGetBalance200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "CeloGetBalance_200_response";
    protected static $_definition = [
        "celo" => ["celo", "string", null, "getCelo", "setCelo"], 
        "c_usd" => ["cUsd", "string", null, "getCUsd", "setCUsd"], 
        "c_eur" => ["cEur", "string", null, "getCEur", "setCEur"]
    ];

    /**
     * CeloGetBalance200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["celo"=>null, "c_usd"=>null, "c_eur"=>null] as $k => $v) {
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
     * Get celo
     *
     * @return string|null
     */
    public function getCelo(): ?string {
        return $this->_data["celo"];
    }

    /**
     * Set celo
     * 
     * @param string|null $celo Balance of Celo
     * @return $this
     */
    public function setCelo(?string $celo) {
        $this->_data['celo'] = $celo;

        return $this;
    }

    /**
     * Get c_usd
     *
     * @return string|null
     */
    public function getCUsd(): ?string {
        return $this->_data["c_usd"];
    }

    /**
     * Set c_usd
     * 
     * @param string|null $c_usd Balance of cUSD
     * @return $this
     */
    public function setCUsd(?string $c_usd) {
        $this->_data['c_usd'] = $c_usd;

        return $this;
    }

    /**
     * Get c_eur
     *
     * @return string|null
     */
    public function getCEur(): ?string {
        return $this->_data["c_eur"];
    }

    /**
     * Set c_eur
     * 
     * @param string|null $c_eur Balance of cEUR
     * @return $this
     */
    public function setCEur(?string $c_eur) {
        $this->_data['c_eur'] = $c_eur;

        return $this;
    }
}
