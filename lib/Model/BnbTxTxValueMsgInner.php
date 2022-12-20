<?php

/**
 * BnbTx_tx_value_msg_inner Model
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
 * BnbTx_tx_value_msg_inner Model
 */
class BnbTxTxValueMsgInner extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BnbTx_tx_value_msg_inner";
    protected static $_definition = [
        "type" => ["type", "string", null, "getType", "setType"], 
        "value" => ["value", "\Tatum\Model\BnbTxTxValueMsgInnerValue", null, "getValue", "setValue"]
    ];

    /**
     * BnbTxTxValueMsgInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["type"=>null, "value"=>null] as $k => $v) {
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
     * Get type
     *
     * @return string|null
     */
    public function getType(): ?string {
        return $this->_data["type"];
    }

    /**
     * Set type
     * 
     * @param string|null $type type
     * @return $this
     */
    public function setType(?string $type) {
        $this->_data['type'] = $type;

        return $this;
    }

    /**
     * Get value
     *
     * @return \Tatum\Model\BnbTxTxValueMsgInnerValue|null
     */
    public function getValue(): ?\Tatum\Model\BnbTxTxValueMsgInnerValue {
        return $this->_data["value"];
    }

    /**
     * Set value
     * 
     * @param \Tatum\Model\BnbTxTxValueMsgInnerValue|null $value value
     * @return $this
     */
    public function setValue(?\Tatum\Model\BnbTxTxValueMsgInnerValue $value) {
        $this->_data['value'] = $value;

        return $this;
    }
}
