<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/TronApi.md#freezetron
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_freeze_tron = (new \Tatum\Model\FreezeTron())
    ->setFromPrivateKey('842E09EB40D8175979EFB0071B28163E11AED0F14BDD84090A4CEFB936EF5701')
    ->setReceiver('TYMwiDu22V6XG3yk6W9cTVBz48okKLRczh')
    ->setDuration(3)
    ->setResource('ENERGY')
    ->setAmount('100000');

try {
    /** @var \Tatum\Model\TransactionHash $response */
    $response = $sdk->mainnet()
        ->api()
        ->tron()
        ->freezeTron($arg_freeze_tron);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->tron()->freezeTron(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->tron()->freezeTron(): " . $exc->getMessage() . PHP_EOL;
}