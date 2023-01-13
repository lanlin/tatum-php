<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offonedeployerc20offchainkmsaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_erc20_offchain_kms_address = (new \Tatum\Model\DeployErc20OffchainKMSAddress())
    ->setSymbol('MT')
    ->setSupply('10000000')
    ->setDescription('My ERC20 Token')
    ->setBasePair('EUR')
    ->setBaseRate(1)/* optional */
    ->setCustomer(null)/* optional */
    ->setAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setNonce(null)/* optional */;

// Shard to operate on
$arg_shard_id = 0;

try {
    /** @var \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->offOneDeployErc20OffchainKMSAddress($arg_deploy_erc20_offchain_kms_address, $arg_shard_id);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->offOneDeployErc20OffchainKMSAddress(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->offOneDeployErc20OffchainKMSAddress(): " . $exc->getMessage() . PHP_EOL;
}