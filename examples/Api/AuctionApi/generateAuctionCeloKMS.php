<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AuctionApi.md#generateauctioncelokms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_generate_auction_celo_kms = (new \Tatum\Model\GenerateAuctionCeloKMS())
    
    // Blockchain to work with.
    ->setChain('CELO')
    
    // Address of the recipient of the fee for the trade.
    ->setFeeRecipient('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // The currency in which the transaction fee will be paid
    ->setFeeCurrency('null')
    
    // Percentage of the selling amount of the NFT asset. 100 - 1%
    ->setAuctionFee(150)
    
    // Identifier of the private key associated in signing application. Private key, or signature Id mus...
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    
    // (optional) If signatureId is mnemonic-based, this is the index to the specific address from that mnemonic.
    ->setIndex(null)
    
    // (optional) The nonce to be set to the transaction; if not present, the last known nonce will be used
    ->setNonce(1)
    
    // (optional) 
    ->setFee(null);

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->auction()
        ->generateAuctionCeloKMS($arg_generate_auction_celo_kms);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->auction()->generateAuctionCeloKMS(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->auction()->generateAuctionCeloKMS(): %s\n", 
        $exc->getMessage()
    );
}