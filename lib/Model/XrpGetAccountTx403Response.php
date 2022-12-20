<?php

/**
 * XrpGetAccountTx_403_response Model
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
 * XrpGetAccountTx_403_response Model
 */
class XrpGetAccountTx403Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XrpGetAccountTx_403_response";
    protected static $_definition = [
        "error_code" => ["errorCode", "string", null, "getErrorCode", "setErrorCode"], 
        "message" => ["message", "string", null, "getMessage", "setMessage"], 
        "status_code" => ["statusCode", "float", null, "getStatusCode", "setStatusCode"]
    ];

    /**
     * XrpGetAccountTx403Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["error_code"=>null, "message"=>null, "status_code"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['error_code'])) {
            $ip[] = "'error_code' can't be null";
        }
        if (is_null($this->_data['message'])) {
            $ip[] = "'message' can't be null";
        }
        if (is_null($this->_data['status_code'])) {
            $ip[] = "'status_code' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get error_code
     *
     * @return string
     */
    public function getErrorCode(): string {
        return $this->_data["error_code"];
    }

    /**
     * Set error_code
     * 
     * @param string $error_code xrp.account.failed
     * @return $this
     */
    public function setErrorCode(string $error_code) {
        $this->_data['error_code'] = $error_code;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage(): string {
        return $this->_data["message"];
    }

    /**
     * Set message
     * 
     * @param string $message ${error} Code: ${code}
     * @return $this
     */
    public function setMessage(string $message) {
        $this->_data['message'] = $message;

        return $this;
    }

    /**
     * Get status_code
     *
     * @return float
     */
    public function getStatusCode(): float {
        return $this->_data["status_code"];
    }

    /**
     * Set status_code
     * 
     * @param float $status_code 403
     * @return $this
     */
    public function setStatusCode(float $status_code) {
        $this->_data['status_code'] = $status_code;

        return $this;
    }
}
