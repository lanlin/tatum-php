<?php
/**
 * Copyright (c) 2022-2023 Tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     API docs: https://apidoc.tatum.io/tag/Litecoin#operation/LtcGetBlockHash
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/LitecoinApi.md#ltcgetblockhash
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The number of blocks preceding a particular block on a block chain.
$arg_i = 1234314;

try {
    /** @var \Tatum\Model\LtcGetBlockHash200Response $response */
    $response = $sdk
        ->mainnet()
        ->api()
        ->litecoin()
        ->ltcGetBlockHash($arg_i);
    
    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->litecoin()->ltcGetBlockHash(): ", 
        var_export($apiExc->getResponseObject(), true), 
        PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->litecoin()->ltcGetBlockHash(): " . $exc->getMessage() . PHP_EOL;
}