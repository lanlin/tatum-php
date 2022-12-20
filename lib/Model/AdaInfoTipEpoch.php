<?php

/**
 * AdaInfo_tip_epoch Model
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
 * AdaInfo_tip_epoch Model
 */
class AdaInfoTipEpoch extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "AdaInfo_tip_epoch";
    protected static $_definition = [
        "number" => ["number", "float", null, "getNumber", "setNumber"]
    ];

    /**
     * AdaInfoTipEpoch
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["number"=>null] as $k => $v) {
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
     * @param float|null $number Last epoch number.
     * @return $this
     */
    public function setNumber(?float $number) {
        $this->_data['number'] = $number;

        return $this;
    }
}
