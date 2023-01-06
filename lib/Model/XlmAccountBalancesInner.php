<?php

/**
 * XlmAccount_balances_inner Model
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
 * XlmAccount_balances_inner Model
 */
class XlmAccountBalancesInner extends AbstractModel {

    public const _D = null;
    protected static $_name = "XlmAccount_balances_inner";
    protected static $_definition = [
        "balance" => ["balance", "string", null, "getBalance", "setBalance", null, ["r" => 0]], 
        "limit" => ["limit", "string", null, "getLimit", "setLimit", null, ["r" => 0]], 
        "buying_liabilities" => ["buying_liabilities", "string", null, "getBuyingLiabilities", "setBuyingLiabilities", null, ["r" => 0]], 
        "selling_liabilities" => ["selling_liabilities", "string", null, "getSellingLiabilities", "setSellingLiabilities", null, ["r" => 0]], 
        "asset_type" => ["asset_type", "string", null, "getAssetType", "setAssetType", null, ["r" => 0]], 
        "asset_code" => ["asset_code", "string", null, "getAssetCode", "setAssetCode", null, ["r" => 0]], 
        "asset_issuer" => ["asset_issuer", "string", null, "getAssetIssuer", "setAssetIssuer", null, ["r" => 0]]
    ];

    /**
     * XlmAccountBalancesInner
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get balance
     *
     * @return string|null
     */
    public function getBalance(): ?string {
        return $this->_data["balance"];
    }

    /**
     * Set balance
     * 
     * @param string|null $balance The number of units of an asset held by this account.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBalance(?string $balance) {
        return $this->_set("balance", $balance);
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
     * @param string|null $limit The maximum amount of this asset that this account is willing to accept. Specified when opening a trustline.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setLimit(?string $limit) {
        return $this->_set("limit", $limit);
    }

    /**
     * Get buying_liabilities
     *
     * @return string|null
     */
    public function getBuyingLiabilities(): ?string {
        return $this->_data["buying_liabilities"];
    }

    /**
     * Set buying_liabilities
     * 
     * @param string|null $buying_liabilities The sum of all buy offers owned by this account for this asset.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBuyingLiabilities(?string $buying_liabilities) {
        return $this->_set("buying_liabilities", $buying_liabilities);
    }

    /**
     * Get selling_liabilities
     *
     * @return string|null
     */
    public function getSellingLiabilities(): ?string {
        return $this->_data["selling_liabilities"];
    }

    /**
     * Set selling_liabilities
     * 
     * @param string|null $selling_liabilities The sum of all sell offers owned by this account for this asset.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSellingLiabilities(?string $selling_liabilities) {
        return $this->_set("selling_liabilities", $selling_liabilities);
    }

    /**
     * Get asset_type
     *
     * @return string|null
     */
    public function getAssetType(): ?string {
        return $this->_data["asset_type"];
    }

    /**
     * Set asset_type
     * 
     * @param string|null $asset_type Either native, credit_alphanum4, or credit_alphanum12.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssetType(?string $asset_type) {
        return $this->_set("asset_type", $asset_type);
    }

    /**
     * Get asset_code
     *
     * @return string|null
     */
    public function getAssetCode(): ?string {
        return $this->_data["asset_code"];
    }

    /**
     * Set asset_code
     * 
     * @param string|null $asset_code The code for this asset.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssetCode(?string $asset_code) {
        return $this->_set("asset_code", $asset_code);
    }

    /**
     * Get asset_issuer
     *
     * @return string|null
     */
    public function getAssetIssuer(): ?string {
        return $this->_data["asset_issuer"];
    }

    /**
     * Set asset_issuer
     * 
     * @param string|null $asset_issuer The Stellar address of this asset’s issuer.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssetIssuer(?string $asset_issuer) {
        return $this->_set("asset_issuer", $asset_issuer);
    }
}
