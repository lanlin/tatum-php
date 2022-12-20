<?php

/**
 * SolanaTxMessageHeader Model
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
 * SolanaTxMessageHeader Model
 */
class SolanaTxMessageHeader extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "SolanaTxMessageHeader";
    protected static $_definition = [
        "num_readonly_signed_accounts" => ["numReadonlySignedAccounts", "float", null, "getNumReadonlySignedAccounts", "setNumReadonlySignedAccounts"], 
        "num_readonly_unsigned_accounts" => ["numReadonlyUnsignedAccounts", "float", null, "getNumReadonlyUnsignedAccounts", "setNumReadonlyUnsignedAccounts"], 
        "num_required_signatures" => ["numRequiredSignatures", "float", null, "getNumRequiredSignatures", "setNumRequiredSignatures"]
    ];

    /**
     * SolanaTxMessageHeader
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["num_readonly_signed_accounts"=>null, "num_readonly_unsigned_accounts"=>null, "num_required_signatures"=>null] as $k => $v) {
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
     * Get num_readonly_signed_accounts
     *
     * @return float|null
     */
    public function getNumReadonlySignedAccounts(): ?float {
        return $this->_data["num_readonly_signed_accounts"];
    }

    /**
     * Set num_readonly_signed_accounts
     * 
     * @param float|null $num_readonly_signed_accounts num_readonly_signed_accounts
     * @return $this
     */
    public function setNumReadonlySignedAccounts(?float $num_readonly_signed_accounts) {
        $this->_data['num_readonly_signed_accounts'] = $num_readonly_signed_accounts;

        return $this;
    }

    /**
     * Get num_readonly_unsigned_accounts
     *
     * @return float|null
     */
    public function getNumReadonlyUnsignedAccounts(): ?float {
        return $this->_data["num_readonly_unsigned_accounts"];
    }

    /**
     * Set num_readonly_unsigned_accounts
     * 
     * @param float|null $num_readonly_unsigned_accounts num_readonly_unsigned_accounts
     * @return $this
     */
    public function setNumReadonlyUnsignedAccounts(?float $num_readonly_unsigned_accounts) {
        $this->_data['num_readonly_unsigned_accounts'] = $num_readonly_unsigned_accounts;

        return $this;
    }

    /**
     * Get num_required_signatures
     *
     * @return float|null
     */
    public function getNumRequiredSignatures(): ?float {
        return $this->_data["num_required_signatures"];
    }

    /**
     * Set num_required_signatures
     * 
     * @param float|null $num_required_signatures num_required_signatures
     * @return $this
     */
    public function setNumRequiredSignatures(?float $num_required_signatures) {
        $this->_data['num_required_signatures'] = $num_required_signatures;

        return $this;
    }
}
