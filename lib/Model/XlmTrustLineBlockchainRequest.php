<?php

/**
 * XlmTrustLineBlockchain_request Model
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
 * XlmTrustLineBlockchain_request Model
 */
class XlmTrustLineBlockchainRequest extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "XlmTrustLineBlockchain_request";
    protected static $_definition = [
        "from_account" => ["fromAccount", "string", null, "getFromAccount", "setFromAccount"], 
        "issuer_account" => ["issuerAccount", "string", null, "getIssuerAccount", "setIssuerAccount"], 
        "token" => ["token", "string", null, "getToken", "setToken"], 
        "from_secret" => ["fromSecret", "string", null, "getFromSecret", "setFromSecret"], 
        "limit" => ["limit", "string", null, "getLimit", "setLimit"], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId"]
    ];

    /**
     * XlmTrustLineBlockchainRequest
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["from_account"=>null, "issuer_account"=>null, "token"=>null, "from_secret"=>null, "limit"=>null, "signature_id"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['from_account'])) {
            $ip[] = "'from_account' can't be null";
        }
        if ((mb_strlen($this->_data['from_account']) > 56)) {
            $ip[] = "'from_account' length must be <= 56";
        }
        if ((mb_strlen($this->_data['from_account']) < 56)) {
            $ip[] = "'from_account' length must be >= 56";
        }
        if (is_null($this->_data['issuer_account'])) {
            $ip[] = "'issuer_account' can't be null";
        }
        if ((mb_strlen($this->_data['issuer_account']) > 56)) {
            $ip[] = "'issuer_account' length must be <= 56";
        }
        if ((mb_strlen($this->_data['issuer_account']) < 56)) {
            $ip[] = "'issuer_account' length must be >= 56";
        }
        if (is_null($this->_data['token'])) {
            $ip[] = "'token' can't be null";
        }
        if ((mb_strlen($this->_data['token']) > 12)) {
            $ip[] = "'token' length must be <= 12";
        }
        if ((mb_strlen($this->_data['token']) < 1)) {
            $ip[] = "'token' length must be >= 1";
        }
        if (!preg_match("/^[a-zA-Z0-9]{1,12}$/", $this->_data['token'])) {
            $ip[] = "'token' must match /^[a-zA-Z0-9]{1,12}$/";
        }
        if (is_null($this->_data['from_secret'])) {
            $ip[] = "'from_secret' can't be null";
        }
        if ((mb_strlen($this->_data['from_secret']) > 56)) {
            $ip[] = "'from_secret' length must be <= 56";
        }
        if ((mb_strlen($this->_data['from_secret']) < 56)) {
            $ip[] = "'from_secret' length must be >= 56";
        }
        if (!is_null($this->_data['limit']) && !preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['limit'])) {
            $ip[] = "'limit' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['signature_id'])) {
            $ip[] = "'signature_id' can't be null";
        }
        
        return $ip;
    }

    /**
     * Get from_account
     *
     * @return string
     */
    public function getFromAccount(): string {
        return $this->_data["from_account"];
    }

    /**
     * Set from_account
     * 
     * @param string $from_account XLM account address. Must be the one used for generating deposit tags.
     * @return $this
     */
    public function setFromAccount(string $from_account) {
        if ((mb_strlen($from_account) > 56)) {
            throw new IAE('XlmTrustLineBlockchainRequest.setFromAccount: $from_account length must be <= 56');
        }
        if ((mb_strlen($from_account) < 56)) {
            throw new IAE('XlmTrustLineBlockchainRequest.setFromAccount: $from_account length must be >= 56');
        }
        $this->_data['from_account'] = $from_account;

        return $this;
    }

    /**
     * Get issuer_account
     *
     * @return string
     */
    public function getIssuerAccount(): string {
        return $this->_data["issuer_account"];
    }

    /**
     * Set issuer_account
     * 
     * @param string $issuer_account Blockchain address of the issuer of the assets to create trust line for.
     * @return $this
     */
    public function setIssuerAccount(string $issuer_account) {
        if ((mb_strlen($issuer_account) > 56)) {
            throw new IAE('XlmTrustLineBlockchainRequest.setIssuerAccount: $issuer_account length must be <= 56');
        }
        if ((mb_strlen($issuer_account) < 56)) {
            throw new IAE('XlmTrustLineBlockchainRequest.setIssuerAccount: $issuer_account length must be >= 56');
        }
        $this->_data['issuer_account'] = $issuer_account;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken(): string {
        return $this->_data["token"];
    }

    /**
     * Set token
     * 
     * @param string $token Asset name.
     * @return $this
     */
    public function setToken(string $token) {
        if ((mb_strlen($token) > 12)) {
            throw new IAE('XlmTrustLineBlockchainRequest.setToken: $token length must be <= 12');
        }
        if ((mb_strlen($token) < 1)) {
            throw new IAE('XlmTrustLineBlockchainRequest.setToken: $token length must be >= 1');
        }
        if ((!preg_match("/^[a-zA-Z0-9]{1,12}$/", $token))) {
            throw new IAE('XlmTrustLineBlockchainRequest.setToken: $token must match /^[a-zA-Z0-9]{1,12}$/, ' . var_export($token, true) . ' given');
        }
        $this->_data['token'] = $token;

        return $this;
    }

    /**
     * Get from_secret
     *
     * @return string
     */
    public function getFromSecret(): string {
        return $this->_data["from_secret"];
    }

    /**
     * Set from_secret
     * 
     * @param string $from_secret Secret for account. Secret, or signature Id must be present.
     * @return $this
     */
    public function setFromSecret(string $from_secret) {
        if ((mb_strlen($from_secret) > 56)) {
            throw new IAE('XlmTrustLineBlockchainRequest.setFromSecret: $from_secret length must be <= 56');
        }
        if ((mb_strlen($from_secret) < 56)) {
            throw new IAE('XlmTrustLineBlockchainRequest.setFromSecret: $from_secret length must be >= 56');
        }
        $this->_data['from_secret'] = $from_secret;

        return $this;
    }

    /**
     * Get limit
     *
     * @return string|null
     */
    public function getLimit(): ?string {
        return $this->_data["limit"];
    }

    /**
     * Set limit
     * 
     * @param string|null $limit Amount of the assets to be permitted to send over this trust line. 0 means deletion of the trust line. When no limit is specified, maximum amount available is permitted.
     * @return $this
     */
    public function setLimit(?string $limit) {
        if (!is_null($limit) && (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $limit))) {
            throw new IAE('XlmTrustLineBlockchainRequest.setLimit: $limit must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($limit, true) . ' given');
        }
        $this->_data['limit'] = $limit;

        return $this;
    }

    /**
     * Get signature_id
     *
     * @return string
     */
    public function getSignatureId(): string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id Identifier of the secret associated in signing application. Secret, or signature Id must be present.
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        $this->_data['signature_id'] = $signature_id;

        return $this;
    }
}
