<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offbscdeployerc20offchainmnemonicaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_erc20_offchain_mnemonic_address = (new \Tatum\Model\DeployErc20OffchainMnemonicAddress())
    ->setSymbol('MT')
    ->setSupply('10000000')
    ->setDescription('My ERC20 Token')
    ->setBasePair('EUR')
    ->setBaseRate(1)/* optional */
    ->setCustomer(null)/* optional */
    ->setAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    ->setIndex(0)
    ->setNonce(null)/* optional */;

try {
    /** @var \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->offBscDeployErc20OffchainMnemonicAddress($arg_deploy_erc20_offchain_mnemonic_address);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->offBscDeployErc20OffchainMnemonicAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->offBscDeployErc20OffchainMnemonicAddress(): " . $exc->getMessage() . PHP_EOL;
}