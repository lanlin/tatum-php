<?php

/**
 * SolanaTxMessage Model
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
 * SolanaTxMessage Model
 */
class SolanaTxMessage extends AbstractModel {

    public const _D = null;
    protected static $_name = "SolanaTxMessage";
    protected static $_definition = [
        "header" => ["header", "\Tatum\Model\SolanaTxMessageHeader", null, "getHeader", "setHeader", null, ["r" => 0]], 
        "account_keys" => ["accountKeys", "string[]", null, "getAccountKeys", "setAccountKeys", null, ["r" => 0, "c" => 1]], 
        "recent_blockhash" => ["recentBlockhash", "string", null, "getRecentBlockhash", "setRecentBlockhash", null, ["r" => 0]], 
        "instructions" => ["instructions", "\Tatum\Model\SolanaTxMessageInstruction[]", null, "getInstructions", "setInstructions", null, ["r" => 0, "c" => 1]], 
        "index_to_program_ids" => ["indexToProgramIds", "object", null, "getIndexToProgramIds", "setIndexToProgramIds", null, ["r" => 0]]
    ];

    /**
     * SolanaTxMessage
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get header
     *
     * @return \Tatum\Model\SolanaTxMessageHeader|null
     */
    public function getHeader(): ?\Tatum\Model\SolanaTxMessageHeader {
        return $this->_data["header"];
    }

    /**
     * Set header
     * 
     * @param \Tatum\Model\SolanaTxMessageHeader|null $header header
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHeader(?\Tatum\Model\SolanaTxMessageHeader $header) {
        return $this->_set("header", $header);
    }

    /**
     * Get account_keys
     *
     * @return string[]|null
     */
    public function getAccountKeys(): ?array {
        return $this->_data["account_keys"];
    }

    /**
     * Set account_keys
     * 
     * @param string[]|null $account_keys account_keys
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountKeys(?array $account_keys) {
        return $this->_set("account_keys", $account_keys);
    }

    /**
     * Get recent_blockhash
     *
     * @return string|null
     */
    public function getRecentBlockhash(): ?string {
        return $this->_data["recent_blockhash"];
    }

    /**
     * Set recent_blockhash
     * 
     * @param string|null $recent_blockhash recent_blockhash
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setRecentBlockhash(?string $recent_blockhash) {
        return $this->_set("recent_blockhash", $recent_blockhash);
    }

    /**
     * Get instructions
     *
     * @return \Tatum\Model\SolanaTxMessageInstruction[]|null
     */
    public function getInstructions(): ?array {
        return $this->_data["instructions"];
    }

    /**
     * Set instructions
     * 
     * @param \Tatum\Model\SolanaTxMessageInstruction[]|null $instructions instructions
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setInstructions(?array $instructions) {
        return $this->_set("instructions", $instructions);
    }

    /**
     * Get index_to_program_ids
     *
     * @return object|null
     */
    public function getIndexToProgramIds(): ?object {
        return $this->_data["index_to_program_ids"];
    }

    /**
     * Set index_to_program_ids
     * 
     * @param object|null $index_to_program_ids index_to_program_ids
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIndexToProgramIds(?object $index_to_program_ids) {
        return $this->_set("index_to_program_ids", $index_to_program_ids);
    }
}
