<?php

/**
 * BtcInfo Model
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
!defined("TATUM-SDK") && exit();

/**
 * BtcInfo Model
 */
class BtcInfo extends AbstractModel {

    public const _D = null;
    protected static $_name = "BtcInfo";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 0]], 
        "blocks" => ["blocks", "float", null, "getBlocks", "setBlocks", null, ["r" => 0]], 
        "headers" => ["headers", "float", null, "getHeaders", "setHeaders", null, ["r" => 0]], 
        "bestblockhash" => ["bestblockhash", "string", null, "getBestblockhash", "setBestblockhash", null, ["r" => 0]], 
        "difficulty" => ["difficulty", "float", null, "getDifficulty", "setDifficulty", null, ["r" => 0]]
    ];

    /**
     * BtcInfo
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get chain
     *
     * @return string|null
     */
    public function getChain(): ?string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string|null $chain Chain of the blockchain, main or test.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(?string $chain) {
        return $this->_set("chain", $chain);
    }

    /**
     * Get blocks
     *
     * @return float|null
     */
    public function getBlocks(): ?float {
        return $this->_data["blocks"];
    }

    /**
     * Set blocks
     * 
     * @param float|null $blocks Last block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBlocks(?float $blocks) {
        return $this->_set("blocks", $blocks);
    }

    /**
     * Get headers
     *
     * @return float|null
     */
    public function getHeaders(): ?float {
        return $this->_data["headers"];
    }

    /**
     * Set headers
     * 
     * @param float|null $headers Last headers.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeaders(?float $headers) {
        return $this->_set("headers", $headers);
    }

    /**
     * Get bestblockhash
     *
     * @return string|null
     */
    public function getBestblockhash(): ?string {
        return $this->_data["bestblockhash"];
    }

    /**
     * Set bestblockhash
     * 
     * @param string|null $bestblockhash Hash of the last block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBestblockhash(?string $bestblockhash) {
        return $this->_set("bestblockhash", $bestblockhash);
    }

    /**
     * Get difficulty
     *
     * @return float|null
     */
    public function getDifficulty(): ?float {
        return $this->_data["difficulty"];
    }

    /**
     * Set difficulty
     * 
     * @param float|null $difficulty Difficulty of the algorithm.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setDifficulty(?float $difficulty) {
        return $this->_set("difficulty", $difficulty);
    }
}
