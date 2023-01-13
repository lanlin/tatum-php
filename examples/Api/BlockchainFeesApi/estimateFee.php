<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainFeesApi.md#estimatefee
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_estimate_fee = (new \Tatum\Model\EstimateFee())
    ->setChain('null')
    ->setType('null')
    ->setSender('0xfb99f8ae9b70a0c8cd96ae665bbaf85a7e01a2ef')/* optional */
    ->setRecipient('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')/* optional */
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')/* optional */
    ->setAmount('100000')/* optional */;

try {
    /** @var \Tatum\Model\EstimateFee200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->estimateFee($arg_estimate_fee);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainFees()->estimateFee(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainFees()->estimateFee(): " . $exc->getMessage() . PHP_EOL;
}