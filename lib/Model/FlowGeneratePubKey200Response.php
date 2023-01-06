<?php

/**
 * FlowGeneratePubKey_200_response Model
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
 * FlowGeneratePubKey_200_response Model
 */
class FlowGeneratePubKey200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "FlowGeneratePubKey_200_response";
    protected static $_definition = [
        "pub_key" => ["pubKey", "string", null, "getPubKey", "setPubKey", null, ["r" => 0]]
    ];

    /**
     * FlowGeneratePubKey200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get pub_key
     *
     * @return string|null
     */
    public function getPubKey(): ?string {
        return $this->_data["pub_key"];
    }

    /**
     * Set pub_key
     * 
     * @param string|null $pub_key Flow public key
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPubKey(?string $pub_key) {
        return $this->_set("pub_key", $pub_key);
    }
}
