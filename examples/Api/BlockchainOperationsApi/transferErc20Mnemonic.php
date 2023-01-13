<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#transfererc20mnemonic
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_erc20_mnemonic = (new \Tatum\Model\TransferErc20Mnemonic())
    ->setSenderAccountId('5e68c66581f2ee32bc354087')
    ->setAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setAmount('100000')
    ->setCompliant(false)/* optional */
    ->setGasLimit('40000')/* optional */
    ->setGasPrice('20')/* optional */
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    ->setIndex(0)
    ->setNonce(null)/* optional */
    ->setPaymentId('1234')/* optional */
    ->setSenderNote('Sender note')/* optional */;

try {
    /** @var \Tatum\Model\TransferBtcMnemonic200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->transferErc20Mnemonic($arg_transfer_erc20_mnemonic);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->transferErc20Mnemonic(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->transferErc20Mnemonic(): " . $exc->getMessage() . PHP_EOL;
}