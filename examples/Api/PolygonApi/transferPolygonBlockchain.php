<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/PolygonApi.md#transferpolygonblockchain
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_polygon_blockchain = (new \Tatum\Model\TransferPolygonBlockchain())
    ->setData('4d79206e6f746520746f2074686520726563697069656e74')/* optional */
    ->setNonce(null)/* optional */
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setCurrency('MATIC')
    ->setFee(null)/* optional */
    ->setAmount('100000')
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->polygon()
        ->transferPolygonBlockchain($arg_transfer_polygon_blockchain);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->polygon()->transferPolygonBlockchain(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->polygon()->transferPolygonBlockchain(): " . $exc->getMessage() . PHP_EOL;
}