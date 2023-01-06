<?php

/**
 * Chart Model
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
 * Chart Model
 * 
 * @description 1 point in the chart. This point represents the tick in the grapch based on the specified time frame.
 */
class Chart extends AbstractModel {

    public const _D = null;
    protected static $_name = "Chart";
    protected static $_definition = [
        "timestamp" => ["timestamp", "float", null, "getTimestamp", "setTimestamp", null, ["r" => 1]], 
        "high" => ["high", "string", null, "getHigh", "setHigh", null, ["r" => 1]], 
        "low" => ["low", "string", null, "getLow", "setLow", null, ["r" => 1]], 
        "open" => ["open", "string", null, "getOpen", "setOpen", null, ["r" => 1]], 
        "close" => ["close", "string", null, "getClose", "setClose", null, ["r" => 1]], 
        "volume" => ["volume", "string", null, "getVolume", "setVolume", null, ["r" => 1]]
    ];

    /**
     * Chart
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get timestamp
     *
     * @return float
     */
    public function getTimestamp(): float {
        return $this->_data["timestamp"];
    }

    /**
     * Set timestamp
     * 
     * @param float $timestamp Milliseconds in UTC of the time interval.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimestamp(float $timestamp) {
        return $this->_set("timestamp", $timestamp);
    }

    /**
     * Get high
     *
     * @return string
     */
    public function getHigh(): string {
        return $this->_data["high"];
    }

    /**
     * Set high
     * 
     * @param string $high Highest trade value in the current interval.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHigh(string $high) {
        return $this->_set("high", $high);
    }

    /**
     * Get low
     *
     * @return string
     */
    public function getLow(): string {
        return $this->_data["low"];
    }

    /**
     * Set low
     * 
     * @param string $low Lowest trade value in the current interval.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLow(string $low) {
        return $this->_set("low", $low);
    }

    /**
     * Get open
     *
     * @return string
     */
    public function getOpen(): string {
        return $this->_data["open"];
    }

    /**
     * Set open
     * 
     * @param string $open Open trade value in the current interval.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setOpen(string $open) {
        return $this->_set("open", $open);
    }

    /**
     * Get close
     *
     * @return string
     */
    public function getClose(): string {
        return $this->_data["close"];
    }

    /**
     * Set close
     * 
     * @param string $close Close trade value in the current interval.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setClose(string $close) {
        return $this->_set("close", $close);
    }

    /**
     * Get volume
     *
     * @return string
     */
    public function getVolume(): string {
        return $this->_data["volume"];
    }

    /**
     * Set volume
     * 
     * @param string $volume Total volume of assets traded in the current interval. Volume is in currency1 asset.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setVolume(string $volume) {
        return $this->_set("volume", $volume);
    }
}
