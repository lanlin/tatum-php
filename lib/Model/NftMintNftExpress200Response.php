<?php

/**
 * nftMintNftExpress_200_response Model
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
 * nftMintNftExpress_200_response Model
 */
class NftMintNftExpress200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "nftMintNftExpress_200_response";
    protected static $_definition = [
        "tx_id" => ["txId", "string", null, "getTxId", "setTxId", null, ["r" => 1]], 
        "token_id" => ["tokenId", "string", 'uint256', "getTokenId", "setTokenId", null, ["r" => 0, "xl" => 78]], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null, ["r" => 0]], 
        "nft_account_address" => ["nftAccountAddress", "string", null, "getNftAccountAddress", "setNftAccountAddress", null, ["r" => 0]], 
        "asset_index" => ["assetIndex", "float", null, "getAssetIndex", "setAssetIndex", null, ["r" => 0]], 
        "confirmed" => ["confirmed", "bool", null, "getConfirmed", "setConfirmed", null, ["r" => 0]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * NftMintNftExpress200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get tx_id
     *
     * @return string
     */
    public function getTxId(): string {
        return $this->_data["tx_id"];
    }

    /**
     * Set tx_id
     * 
     * @param string $tx_id The ID of the transaction
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTxId(string $tx_id) {
        return $this->_set("tx_id", $tx_id);
    }

    /**
     * Get token_id
     *
     * @return string|null
     */
    public function getTokenId(): ?string {
        return $this->_data["token_id"];
    }

    /**
     * Set token_id
     * 
     * @param string|null $token_id ID of the token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTokenId(?string $token_id) {
        return $this->_set("token_id", $token_id);
    }

    /**
     * Get nft_address
     *
     * @return string|null
     */
    public function getNftAddress(): ?string {
        return $this->_data["nft_address"];
    }

    /**
     * Set nft_address
     * 
     * @param string|null $nft_address The blockchain address of the minted NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNftAddress(?string $nft_address) {
        return $this->_set("nft_address", $nft_address);
    }

    /**
     * Get nft_account_address
     *
     * @return string|null
     */
    public function getNftAccountAddress(): ?string {
        return $this->_data["nft_account_address"];
    }

    /**
     * Set nft_account_address
     * 
     * @param string|null $nft_account_address The blockchain address that received the minted NFT; this address was created under the recipient's account address (the one in the <code>to</code> parameter of the request body), is owned by the recipient's address, and has the same private key
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNftAccountAddress(?string $nft_account_address) {
        return $this->_set("nft_account_address", $nft_account_address);
    }

    /**
     * Get asset_index
     *
     * @return float|null
     */
    public function getAssetIndex(): ?float {
        return $this->_data["asset_index"];
    }

    /**
     * Set asset_index
     * 
     * @param float|null $asset_index The ID of the minted NFT
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAssetIndex(?float $asset_index) {
        return $this->_set("asset_index", $asset_index);
    }

    /**
     * Get confirmed
     *
     * @return bool|null
     */
    public function getConfirmed(): ?bool {
        return $this->_data["confirmed"];
    }

    /**
     * Set confirmed
     * 
     * @param bool|null $confirmed If set to \"true\", the transaction was included in the block within five rounds; otherwise, returned set to \"false\". \"false\" does not mean that the transaction was not included in the block; the Tatum API just does not wait for that much time to return the response.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setConfirmed(?bool $confirmed) {
        return $this->_set("confirmed", $confirmed);
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
     * @param string $signature_id The internal Tatum ID of the prepared transaction for Key Management Sysytem (KMS) to sign<br/>This is different from the <code>signatureId</code> parameter that you provided in the request body. The <code>signatureId</code> parameter in the request body specifies the signature ID associated with the private key in KMS.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
