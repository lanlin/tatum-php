<?php

/**
 * VerifySolanaNFTKMS Model
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
 * VerifySolanaNFTKMS Model
 */
class VerifySolanaNFTKMS extends AbstractModel {

    public const _D = null;
    public const CHAIN_SOL = 'SOL';
    protected static $_name = "VerifySolanaNFTKMS";
    protected static $_definition = [
        "chain" => ["chain", "string", null, "getChain", "setChain", null, ["r" => 1, "e" => 1]], 
        "nft_address" => ["nftAddress", "string", null, "getNftAddress", "setNftAddress", null, ["r" => 1, "nl" => 43, "xl" => 44]], 
        "collection_address" => ["collectionAddress", "string", null, "getCollectionAddress", "setCollectionAddress", null, ["r" => 1, "nl" => 43, "xl" => 44]], 
        "from" => ["from", "string", null, "getFrom", "setFrom", null, ["r" => 1, "nl" => 43, "xl" => 44]], 
        "signature_id" => ["signatureId", "string", 'uuid', "getSignatureId", "setSignatureId", null, ["r" => 1]]
    ];

    /**
     * VerifySolanaNFTKMS
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
    public function getChainAllowableValues(): ?array {
        return [
            self::CHAIN_SOL,
        ];
    }

    /**
     * Get chain
     *
     * @return string|null
     */
    public function getChain(): ?string {
        return $this->_data["chain"];
    }

    /**
     * Set chain
     * 
     * @param string $chain The blockchain to work with
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setChain(string $chain) {
        return $this->_set("chain", $chain);
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
     * @param string $nft_address The blockchain address of the NFT to verify
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setNftAddress(string $nft_address) {
        return $this->_set("nft_address", $nft_address);
    }

    /**
     * Get collection_address
     *
     * @return string|null
     */
    public function getCollectionAddress(): ?string {
        return $this->_data["collection_address"];
    }

    /**
     * Set collection_address
     * 
     * @param string $collection_address The blockchain address of the NFT collection where the NFT should be verified in. The collection must be a sized collection that was introduced in <a href=\"https://docs.metaplex.com/programs/token-metadata/changelog/v1.3\" target=\"_blank\">Version 1.3</a> of the Metaplex Token Metadata program.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCollectionAddress(string $collection_address) {
        return $this->_set("collection_address", $collection_address);
    }

    /**
     * Get from
     *
     * @return string|null
     */
    public function getFrom(): ?string {
        return $this->_data["from"];
    }

    /**
     * Set from
     * 
     * @param string $from The blockchain address of the collection verifier on behalf of whom the transaction will be originated. The transaction fee will be paid from this address.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setFrom(string $from) {
        return $this->_set("from", $from);
    }

    /**
     * Get signature_id
     *
     * @return string|null
     */
    public function getSignatureId(): ?string {
        return $this->_data["signature_id"];
    }

    /**
     * Set signature_id
     * 
     * @param string $signature_id Identifier of the private key associated in signing application. Private key, or signature Id must be present.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSignatureId(string $signature_id) {
        return $this->_set("signature_id", $signature_id);
    }
}
