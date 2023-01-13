<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainFeesApi.md#ethestimategas
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_eth_estimate_gas = (new \Tatum\Model\EthEstimateGas())
    ->setFrom('0xfb99f8ae9b70a0c8cd96ae665bbaf85a7e01a2ef')
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')/* optional */
    ->setAmount('100000')
    ->setData('4d79206e6f746520746f2074686520726563697069656e74')/* optional */;

// Type of Ethereum testnet. Defaults to ethereum-sepolia.
$arg_x_testnet_type = "'ethereum-sepolia'";

try {
    /** @var \Tatum\Model\EthGasEstimation $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainFees()
        ->ethEstimateGas($arg_eth_estimate_gas, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainFees()->ethEstimateGas(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainFees()->ethEstimateGas(): " . $exc->getMessage() . PHP_EOL;
}