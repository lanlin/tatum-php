<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BitcoinCashApi.md#bchtransaction
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_bch_transaction = (new \Tatum\Model\BchTransaction())
    ->setFromUtxo(null)
    ->setTo(null)
    ->setFee('0.0015')/* optional */
    ->setChangeAddress('bitcoincash:qrd9khmeg4nqag3h5gzu8vjt537pm7le85lcauzez')/* optional */;

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->bitcoinCash()
        ->bchTransaction($arg_bch_transaction);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->bitcoinCash()->bchTransaction(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->bitcoinCash()->bchTransaction(): " . $exc->getMessage() . PHP_EOL;
}