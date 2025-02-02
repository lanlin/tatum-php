<?php

/**
 * EvmListingData Model
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
 * EvmListingData Model
 */
class EvmListingData extends AbstractModel {

    public const _D = null;
    public const STATE__0 = '0';
    public const STATE__1 = '1';
    public const STATE__2 = '2';
    protected static $_name = "EvmListingData";
    protected static $_definition = [
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 0]], 
        "buyer" => ["buyer", "string", null, "getBuyer", "setBuyer", null, ["r" => 0]], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address", null, ["r" => 0]], 
        "is_erc721" => ["isErc721", "bool", null, "getIsErc721", "setIsErc721", null, ["r" => 0]], 
        "listing_id" => ["listingId", "string", null, "getListingId", "setListingId", null, ["r" => 0]], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null, ["r" => 0]], 
        "price" => ["price", "string", null, "getPrice", "setPrice", null, ["r" => 0]], 
        "seller" => ["seller", "string", null, "getSeller", "setSeller", null, ["r" => 0]], 
        "state" => ["state", "string", null, "getState", "setState", null, ["r" => 0, "e" => 1]]
    ];

    /**
     * EvmListingData
     *
     * @param  array  $data  Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return array|null
     */
    public function getStateAllowableValues(): ?array {
        return [
            self::STATE__0,
            self::STATE__1,
            self::STATE__2,
        ];
    }

    /**
     * Get amount
     *
     * @return string|null
     */
    public function getAmount(): ?string {
        return $this->_data["amount"];
    }

    /**
     * Set amount
     * 
     * @param string|null $amount Amount of NFTs to sold in this listing. Valid only for ERC1155 listings.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(?string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get buyer
     *
     * @return string|null
     */
    public function getBuyer(): ?string {
        return $this->_data["buyer"];
    }

    /**
     * Set buyer
     * 
     * @param string|null $buyer Address of the buyer, if exists.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBuyer(?string $buyer) {
        return $this->_set("buyer", $buyer);
    }

    /**
     * Get erc20_address
     *
     * @return string|null
     */
    public function getErc20Address(): ?string {
        return $this->_data["erc20_address"];
    }

    /**
     * Set erc20_address
     * 
     * @param string|null $erc20_address Address of the ERC20 token smart contract, which should be used for paying for the asset
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setErc20Address(?string $erc20_address) {
        return $this->_set("erc20_address", $erc20_address);
    }

    /**
     * Get is_erc721
     *
     * @return bool|null
     */
    public function getIsErc721(): ?bool {
        return $this->_data["is_erc721"];
    }

    /**
     * Set is_erc721
     * 
     * @param bool|null $is_erc721 True if asset is NFT of type ERC721, false if ERC1155
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIsErc721(?bool $is_erc721) {
        return $this->_set("is_erc721", $is_erc721);
    }

    /**
     * Get listing_id
     *
     * @return string|null
     */
    public function getListingId(): ?string {
        return $this->_data["listing_id"];
    }

    /**
     * Set listing_id
     * 
     * @param string|null $listing_id ID of the listing.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setListingId(?string $listing_id) {
        return $this->_set("listing_id", $listing_id);
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
     * @param string|null $nft_address Address of the NFT smart contract.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNftAddress(?string $nft_address) {
        return $this->_set("nft_address", $nft_address);
    }

    /**
     * Get price
     *
     * @return string|null
     */
    public function getPrice(): ?string {
        return $this->_data["price"];
    }

    /**
     * Set price
     * 
     * @param string|null $price Price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setPrice(?string $price) {
        return $this->_set("price", $price);
    }

    /**
     * Get seller
     *
     * @return string|null
     */
    public function getSeller(): ?string {
        return $this->_data["seller"];
    }

    /**
     * Set seller
     * 
     * @param string|null $seller Address of the seller.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSeller(?string $seller) {
        return $this->_set("seller", $seller);
    }

    /**
     * Get state
     *
     * @return string|null
     */
    public function getState(): ?string {
        return $this->_data["state"];
    }

    /**
     * Set state
     * 
     * @param string|null $state State of the listing. 0 - available, 1 - sold, 2 - cancelled
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setState(?string $state) {
        return $this->_set("state", $state);
    }
}
