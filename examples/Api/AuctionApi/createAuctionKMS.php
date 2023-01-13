<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/AuctionApi.md#createauctionkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_auction_kms = (new \Tatum\Model\CreateAuctionKMS())
    ->setChain('ETH')
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setNftAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setSeller('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setErc20Address('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')/* optional */
    ->setId('null')
    ->setAmount('1')/* optional */
    ->setTokenId('100000')
    ->setEndedAt(100000)
    ->setIsErc721(true)
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setIndex(null)/* optional */
    ->setNonce(1)/* optional */
    ->setFee(null)/* optional */;

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->auction()
        ->createAuctionKMS($arg_create_auction_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->auction()->createAuctionKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->auction()->createAuctionKMS(): " . $exc->getMessage() . PHP_EOL;
}