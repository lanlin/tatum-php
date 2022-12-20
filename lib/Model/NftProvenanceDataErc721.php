<?php

/**
 * NftProvenanceDataErc721 Model
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
 * NftProvenanceDataErc721 Model
 */
class NftProvenanceDataErc721 extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "NftProvenanceDataErc721";
    protected static $_definition = [
        "provenance_data" => ["provenanceData", "string", null, "getProvenanceData", "setProvenanceData"], 
        "token_price" => ["tokenPrice", "string", null, "getTokenPrice", "setTokenPrice"]
    ];

    /**
     * NftProvenanceDataErc721
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["provenance_data"=>null, "token_price"=>null] as $k => $v) {
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
     * Get provenance_data
     *
     * @return string|null
     */
    public function getProvenanceData(): ?string {
        return $this->_data["provenance_data"];
    }

    /**
     * Set provenance_data
     * 
     * @param string|null $provenance_data provenance_data
     * @return $this
     */
    public function setProvenanceData(?string $provenance_data) {
        $this->_data['provenance_data'] = $provenance_data;

        return $this;
    }

    /**
     * Get token_price
     *
     * @return string|null
     */
    public function getTokenPrice(): ?string {
        return $this->_data["token_price"];
    }

    /**
     * Set token_price
     * 
     * @param string|null $token_price token_price
     * @return $this
     */
    public function setTokenPrice(?string $token_price) {
        $this->_data['token_price'] = $token_price;

        return $this;
    }
}
