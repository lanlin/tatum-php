<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AuctionApi.md#createauction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_auction = (new \Tatum\Model\CreateAuction())
    
    // Blockchain to work with.
    ->setChain('ETH')
    
    // Address of the auction smart contract.
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Address of the NFT asset to sell smart contract.
    ->setNftAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Address of the seller of the NFT asset.
    ->setSeller('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // (optional) Optional address of the ERC20 token, which will be used as a selling currency of the NFT.
    ->setErc20Address('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // ID of the auction. It's up to the developer to generate unique ID
    ->setId('null')
    
    // (optional) Amount of the assets to be sent. For ERC-721 tokens, enter 1.
    ->setAmount('1')
    
    // ID of token, if transaction is for ERC-721 or ERC-1155.
    ->setTokenId('100000')
    
    // Last block, where auction accepts bids.
    ->setEndedAt(100000)
    
    // True if asset is NFT of type ERC721, false if ERC1155.
    ->setIsErc721(true)
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) 
    ->setFee(null);

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->auction()
        ->createAuction($arg_create_auction);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->auction()->createAuction(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->auction()->createAuction(): %s\n", 
        $exc->getMessage()
    );
}