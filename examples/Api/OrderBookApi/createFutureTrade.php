<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/OrderBookApi.md#createfuturetrade
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_create_future_trade = (new \Tatum\Model\CreateFutureTrade())
    ->setType('BUY')
    ->setPrice('8650.4')
    ->setAmount('15000')
    ->setPair('BTC/EUR')
    ->setCurrency1AccountId('7c21ed165e294db78b95f0f1')
    ->setCurrency2AccountId('7c21ed165e294db78b95f0f1')
    ->setFeeAccountId('7c21ed165e294db78b95f0f1')/* optional */
    ->setFee(1.5)/* optional */
    ->setAttr(null);

try {
    /** @var \Tatum\Model\Id $response */
    $response = $sdk->mainnet()
        ->api()
        ->orderBook()
        ->createFutureTrade($arg_create_future_trade);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->orderBook()->createFutureTrade(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->orderBook()->createFutureTrade(): " . $exc->getMessage() . PHP_EOL;
}