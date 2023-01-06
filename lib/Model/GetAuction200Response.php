<?php

/**
 * GetAuction_200_response Model
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
 * GetAuction_200_response Model
 */
class GetAuction200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "GetAuction_200_response";
    protected static $_definition = [
        "amount" => ["amount", "string", null, "getAmount", "setAmount", null, ["r" => 0]], 
        "bidder" => ["bidder", "string", null, "getBidder", "setBidder", null, ["r" => 0]], 
        "erc20_address" => ["erc20Address", "string", null, "getErc20Address", "setErc20Address", null, ["r" => 0]], 
        "is_erc721" => ["isErc721", "bool", null, "getIsErc721", "setIsErc721", null, ["r" => 0]], 
        "started_at" => ["startedAt", "string", null, "getStartedAt", "setStartedAt", null, ["r" => 0]], 
        "ended_at" => ["endedAt", "string", null, "getEndedAt", "setEndedAt", null, ["r" => 0]], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null, ["r" => 0]], 
        "ending_price" => ["endingPrice", "string", null, "getEndingPrice", "setEndingPrice", null, ["r" => 0]], 
        "seller" => ["seller", "string", null, "getSeller", "setSeller", null, ["r" => 0]], 
        "highest_bid" => ["highestBid", "string", null, "getHighestBid", "setHighestBid", null, ["r" => 0]]
    ];

    /**
     * GetAuction200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
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
     * @param string|null $amount Amount of NFTs to sold in this auction. Valid only for ERC1155 listings.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAmount(?string $amount) {
        return $this->_set("amount", $amount);
    }

    /**
     * Get bidder
     *
     * @return string|null
     */
    public function getBidder(): ?string {
        return $this->_data["bidder"];
    }

    /**
     * Set bidder
     * 
     * @param string|null $bidder Address of the highest buyer, if exists.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setBidder(?string $bidder) {
        return $this->_set("bidder", $bidder);
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
     * @param string|null $erc20_address Address of the ERC20 token smart contract, which should be used for paying for the asset..
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
     * @param bool|null $is_erc721 If the listing is for ERC721 or ERC1155 token.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIsErc721(?bool $is_erc721) {
        return $this->_set("is_erc721", $is_erc721);
    }

    /**
     * Get started_at
     *
     * @return string|null
     */
    public function getStartedAt(): ?string {
        return $this->_data["started_at"];
    }

    /**
     * Set started_at
     * 
     * @param string|null $started_at Block height this auction started at.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setStartedAt(?string $started_at) {
        return $this->_set("started_at", $started_at);
    }

    /**
     * Get ended_at
     *
     * @return string|null
     */
    public function getEndedAt(): ?string {
        return $this->_data["ended_at"];
    }

    /**
     * Set ended_at
     * 
     * @param string|null $ended_at Block height this auction ended at.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEndedAt(?string $ended_at) {
        return $this->_set("ended_at", $ended_at);
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
     * Get ending_price
     *
     * @return string|null
     */
    public function getEndingPrice(): ?string {
        return $this->_data["ending_price"];
    }

    /**
     * Set ending_price
     * 
     * @param string|null $ending_price Final auction price of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setEndingPrice(?string $ending_price) {
        return $this->_set("ending_price", $ending_price);
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
     * Get highest_bid
     *
     * @return string|null
     */
    public function getHighestBid(): ?string {
        return $this->_data["highest_bid"];
    }

    /**
     * Set highest_bid
     * 
     * @param string|null $highest_bid Current highest bid of the NFT asset in native currency or ERC20 token based on the presence of erc20Address field.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setHighestBid(?string $highest_bid) {
        return $this->_set("highest_bid", $highest_bid);
    }
}
