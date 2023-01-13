<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/GasPumpApi.md#activategaspumpkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_activate_gas_pump_kms = (new \Tatum\Model\ActivateGasPumpKMS())
    ->setChain('ETH')
    ->setOwner('0x2b5a0bE5940B63dE1eDdCCCa7bd977357e2488eD')
    ->setFrom(0)
    ->setTo(200)
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setIndex(null)/* optional */;

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->gasPump()
        ->activateGasPumpKMS($arg_activate_gas_pump_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->gasPump()->activateGasPumpKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->gasPump()->activateGasPumpKMS(): " . $exc->getMessage() . PHP_EOL;
}