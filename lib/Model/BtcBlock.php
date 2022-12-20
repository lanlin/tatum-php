<?php

/**
 * BtcBlock Model
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
 * BtcBlock Model
 */
class BtcBlock extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "BtcBlock";
    protected static $_definition = [
        "hash" => ["hash", "string", null, "getHash", "setHash"], 
        "height" => ["height", "float", null, "getHeight", "setHeight"], 
        "depth" => ["depth", "float", null, "getDepth", "setDepth"], 
        "version" => ["version", "float", null, "getVersion", "setVersion"], 
        "prev_block" => ["prevBlock", "string", null, "getPrevBlock", "setPrevBlock"], 
        "merkle_root" => ["merkleRoot", "string", null, "getMerkleRoot", "setMerkleRoot"], 
        "time" => ["time", "float", null, "getTime", "setTime"], 
        "bits" => ["bits", "float", null, "getBits", "setBits"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "txs" => ["txs", "\Tatum\Model\BtcTx[]", null, "getTxs", "setTxs"]
    ];

    /**
     * BtcBlock
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["hash"=>null, "height"=>null, "depth"=>null, "version"=>null, "prev_block"=>null, "merkle_root"=>null, "time"=>null, "bits"=>null, "nonce"=>null, "txs"=>null] as $k => $v) {
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
     * Get hash
     *
     * @return string|null
     */
    public function getHash(): ?string {
        return $this->_data["hash"];
    }

    /**
     * Set hash
     * 
     * @param string|null $hash Hash of block.
     * @return $this
     */
    public function setHash(?string $hash) {
        $this->_data['hash'] = $hash;

        return $this;
    }

    /**
     * Get height
     *
     * @return float|null
     */
    public function getHeight(): ?float {
        return $this->_data["height"];
    }

    /**
     * Set height
     * 
     * @param float|null $height The number of blocks preceding a particular block on a block chain.
     * @return $this
     */
    public function setHeight(?float $height) {
        $this->_data['height'] = $height;

        return $this;
    }

    /**
     * Get depth
     *
     * @return float|null
     */
    public function getDepth(): ?float {
        return $this->_data["depth"];
    }

    /**
     * Set depth
     * 
     * @param float|null $depth The number of blocks following a particular block on a block chain, including current one.
     * @return $this
     */
    public function setDepth(?float $depth) {
        $this->_data['depth'] = $depth;

        return $this;
    }

    /**
     * Get version
     *
     * @return float|null
     */
    public function getVersion(): ?float {
        return $this->_data["version"];
    }

    /**
     * Set version
     * 
     * @param float|null $version Block version.
     * @return $this
     */
    public function setVersion(?float $version) {
        $this->_data['version'] = $version;

        return $this;
    }

    /**
     * Get prev_block
     *
     * @return string|null
     */
    public function getPrevBlock(): ?string {
        return $this->_data["prev_block"];
    }

    /**
     * Set prev_block
     * 
     * @param string|null $prev_block Hash of the previous block.
     * @return $this
     */
    public function setPrevBlock(?string $prev_block) {
        $this->_data['prev_block'] = $prev_block;

        return $this;
    }

    /**
     * Get merkle_root
     *
     * @return string|null
     */
    public function getMerkleRoot(): ?string {
        return $this->_data["merkle_root"];
    }

    /**
     * Set merkle_root
     * 
     * @param string|null $merkle_root The root node of a merkle tree, a descendant of all the hashed pairs in the tree.
     * @return $this
     */
    public function setMerkleRoot(?string $merkle_root) {
        $this->_data['merkle_root'] = $merkle_root;

        return $this;
    }

    /**
     * Get time
     *
     * @return float|null
     */
    public function getTime(): ?float {
        return $this->_data["time"];
    }

    /**
     * Set time
     * 
     * @param float|null $time Time of the block.
     * @return $this
     */
    public function setTime(?float $time) {
        $this->_data['time'] = $time;

        return $this;
    }

    /**
     * Get bits
     *
     * @return float|null
     */
    public function getBits(): ?float {
        return $this->_data["bits"];
    }

    /**
     * Set bits
     * 
     * @param float|null $bits bits
     * @return $this
     */
    public function setBits(?float $bits) {
        $this->_data['bits'] = $bits;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce Arbitrary number that is used in Bitcoin's proof of work consensus algorithm.
     * @return $this
     */
    public function setNonce(?float $nonce) {
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get txs
     *
     * @return \Tatum\Model\BtcTx[]|null
     */
    public function getTxs(): ?array {
        return $this->_data["txs"];
    }

    /**
     * Set txs
     * 
     * @param \Tatum\Model\BtcTx[]|null $txs txs
     * @return $this
     */
    public function setTxs(?array $txs) {
        $this->_data['txs'] = $txs;

        return $this;
    }
}
