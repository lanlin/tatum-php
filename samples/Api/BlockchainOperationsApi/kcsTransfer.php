<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/BlockchainOperations#operation/KcsTransfer
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#kcstransfer
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_kcs_transfer_request = new \Tatum\Model\KcsTransferRequest();

try {
    /** @var \Tatum\Model\BtcTransfer200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->blockchainOperations()
        ->kcsTransfer($arg_kcs_transfer_request);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->kcsTransfer(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->kcsTransfer(): " . $exc->getMessage() . PHP_EOL;
}