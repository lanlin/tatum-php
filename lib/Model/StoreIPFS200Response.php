<?php

/**
 * StoreIPFS_200_response Model
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
 * StoreIPFS_200_response Model
 */
class StoreIPFS200Response extends AbstractModel {

    public const _D = null;
    protected static $_name = "StoreIPFS_200_response";
    protected static $_definition = [
        "ipfs_hash" => ["ipfsHash", "string", null, "getIpfsHash", "setIpfsHash", null, ["r" => 0]]
    ];

    /**
     * StoreIPFS200Response
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }


    /**
     * Get ipfs_hash
     *
     * @return string|null
     */
    public function getIpfsHash(): ?string {
        return $this->_data["ipfs_hash"];
    }

    /**
     * Set ipfs_hash
     * 
     * @param string|null $ipfs_hash IPFS CID identifier of the stored file.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setIpfsHash(?string $ipfs_hash) {
        return $this->_set("ipfs_hash", $ipfs_hash);
    }
}
