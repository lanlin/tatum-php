<?php

/**
 * EntitiesCount Model
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
 * EntitiesCount Model
 */
class EntitiesCount extends AbstractModel {

    public const _D = null;
    protected static $_name = "EntitiesCount";
    protected static $_definition = [
        "total" => ["total", "float", null, "getTotal", "setTotal", null, ["r" => 0]]
    ];

    /**
     * EntitiesCount
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get total
     *
     * @return float|null
     */
    public function getTotal(): ?float {
        return $this->_data["total"];
    }

    /**
     * Set total
     * 
     * @param float|null $total Total entities
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTotal(?float $total) {
        return $this->_set("total", $total);
    }
}
