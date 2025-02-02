<?php

/**
 * AdaInfo_tip Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto-generated by tatum.io
 * Do not edit this file manually!
 */

namespace Tatum\Model;
!defined("TATUM-SDK") && exit();

/**
 * AdaInfo_tip Model
 */
class AdaInfoTip extends AbstractModel {

    public const _D = null;
    protected static $_name = "AdaInfo_tip";
    protected static $_definition = [
        "number" => ["number", "float", null, "getNumber", "setNumber", null, ["r" => 0]], 
        "slot_no" => ["slotNo", "float", null, "getSlotNo", "setSlotNo", null, ["r" => 0]], 
        "epoch" => ["epoch", "\Tatum\Model\AdaInfoTipEpoch", null, "getEpoch", "setEpoch", null, ["r" => 0]]
    ];

    /**
     * AdaInfoTip
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get number
     *
     * @return float|null
     */
    public function getNumber(): ?float {
        return $this->_data["number"];
    }

    /**
     * Set number
     * 
     * @param float|null $number Last block.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNumber(?float $number) {
        return $this->_set("number", $number);
    }

    /**
     * Get slot_no
     *
     * @return float|null
     */
    public function getSlotNo(): ?float {
        return $this->_data["slot_no"];
    }

    /**
     * Set slot_no
     * 
     * @param float|null $slot_no Last slot number.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSlotNo(?float $slot_no) {
        return $this->_set("slot_no", $slot_no);
    }

    /**
     * Get epoch
     *
     * @return \Tatum\Model\AdaInfoTipEpoch|null
     */
    public function getEpoch(): ?\Tatum\Model\AdaInfoTipEpoch {
        return $this->_data["epoch"];
    }

    /**
     * Set epoch
     * 
     * @param \Tatum\Model\AdaInfoTipEpoch|null $epoch epoch
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEpoch(?\Tatum\Model\AdaInfoTipEpoch $epoch) {
        return $this->_set("epoch", $epoch);
    }
}
