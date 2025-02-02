<?php

/**
 * Error400 Model
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
 * Error400 Model
 */
class Error400 extends AbstractModel {

    public const _D = null;
    protected static $_name = "Error400";
    protected static $_definition = [
        "error_code" => ["errorCode", "string", null, "getErrorCode", "setErrorCode", null, ["r" => 1]], 
        "message" => ["message", "string", null, "getMessage", "setMessage", null, ["r" => 1]], 
        "status_code" => ["statusCode", "float", null, "getStatusCode", "setStatusCode", null, ["r" => 1]], 
        "data" => ["data", "\Tatum\Model\Error400DataInner[]", null, "getData", "setData", null, ["r" => 1, "c" => 1]]
    ];

    /**
     * Error400
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get error_code
     *
     * @return string|null
     */
    public function getErrorCode(): ?string {
        return $this->_data["error_code"];
    }

    /**
     * Set error_code
     * 
     * @param string $error_code validation.failed
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setErrorCode(string $error_code) {
        return $this->_set("error_code", $error_code);
    }

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage(): ?string {
        return $this->_data["message"];
    }

    /**
     * Set message
     * 
     * @param string $message Request validation failed. Please see data for additional information.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setMessage(string $message) {
        return $this->_set("message", $message);
    }

    /**
     * Get status_code
     *
     * @return float|null
     */
    public function getStatusCode(): ?float {
        return $this->_data["status_code"];
    }

    /**
     * Set status_code
     * 
     * @param float $status_code 400
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStatusCode(float $status_code) {
        return $this->_set("status_code", $status_code);
    }

    /**
     * Get data
     *
     * @return array|null
     */
    public function getData(): ?array {
        return $this->_data["data"];
    }

    /**
     * Set data
     * 
     * @param \Tatum\Model\Error400DataInner[] $data data
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setData(array $data) {
        return $this->_set("data", $data);
    }
}
