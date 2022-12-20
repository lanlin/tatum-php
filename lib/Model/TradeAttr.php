<?php

/**
 * Trade_attr Model
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
 * Trade_attr Model
 * 
 * @description Additional attributes for the future type.
 */
class TradeAttr extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "Trade_attr";
    protected static $_definition = [
        "seal_date" => ["sealDate", "float", null, "getSealDate", "setSealDate"], 
        "percent_block" => ["percentBlock", "float", null, "getPercentBlock", "setPercentBlock"], 
        "percent_penalty" => ["percentPenalty", "float", null, "getPercentPenalty", "setPercentPenalty"]
    ];

    /**
     * TradeAttr
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["seal_date"=>null, "percent_block"=>null, "percent_penalty"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['seal_date'])) {
            $ip[] = "'seal_date' can't be null";
        }
        if (($this->_data['seal_date'] < 0)) {
            $ip[] = "'seal_date' must be >= 0";
        }
        if (!is_null($this->_data['percent_block']) && ($this->_data['percent_block'] > 100)) {
            $ip[] = "'percent_block' must be <= 100";
        }
        if (!is_null($this->_data['percent_block']) && ($this->_data['percent_block'] < 0)) {
            $ip[] = "'percent_block' must be >= 0";
        }
        if (!is_null($this->_data['percent_penalty']) && ($this->_data['percent_penalty'] > 100)) {
            $ip[] = "'percent_penalty' must be <= 100";
        }
        if (!is_null($this->_data['percent_penalty']) && ($this->_data['percent_penalty'] < 0)) {
            $ip[] = "'percent_penalty' must be >= 0";
        }
        
        return $ip;
    }

    /**
     * Get seal_date
     *
     * @return float
     */
    public function getSealDate(): float {
        return $this->_data["seal_date"];
    }

    /**
     * Set seal_date
     * 
     * @param float $seal_date Time in UTC when the future will be filled.
     * @return $this
     */
    public function setSealDate(float $seal_date) {
        if (($seal_date < 0)) {
            throw new IAE('TradeAttr.setSealDate: $seal_date must be >=0');
        }
        $this->_data['seal_date'] = $seal_date;

        return $this;
    }

    /**
     * Get percent_block
     *
     * @return float|null
     */
    public function getPercentBlock(): ?float {
        return $this->_data["percent_block"];
    }

    /**
     * Set percent_block
     * 
     * @param float|null $percent_block Percentage of the future amount which the selling or buying account must have available for the future’s creation. This amount will be blocked until the future is filled or expires.
     * @return $this
     */
    public function setPercentBlock(?float $percent_block) {
        if (!is_null($percent_block) && ($percent_block > 100)) {
            throw new IAE('TradeAttr.setPercentBlock: $percent_block must be <=100');
        }
        if (!is_null($percent_block) && ($percent_block < 0)) {
            throw new IAE('TradeAttr.setPercentBlock: $percent_block must be >=0');
        }
        $this->_data['percent_block'] = $percent_block;

        return $this;
    }

    /**
     * Get percent_penalty
     *
     * @return float|null
     */
    public function getPercentPenalty(): ?float {
        return $this->_data["percent_penalty"];
    }

    /**
     * Set percent_penalty
     * 
     * @param float|null $percent_penalty If one of the parties doesn’t have the full amount of the future at the time of expiration filled, the party will be penalized.
     * @return $this
     */
    public function setPercentPenalty(?float $percent_penalty) {
        if (!is_null($percent_penalty) && ($percent_penalty > 100)) {
            throw new IAE('TradeAttr.setPercentPenalty: $percent_penalty must be <=100');
        }
        if (!is_null($percent_penalty) && ($percent_penalty < 0)) {
            throw new IAE('TradeAttr.setPercentPenalty: $percent_penalty must be >=0');
        }
        $this->_data['percent_penalty'] = $percent_penalty;

        return $this;
    }
}
