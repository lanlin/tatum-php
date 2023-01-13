<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#offonedeployerc20offchainmnemxpub
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_erc20_offchain_mnem_xpub = (new \Tatum\Model\DeployErc20OffchainMnemXpub())
    ->setSymbol('MT')
    ->setSupply('10000000')
    ->setDescription('My ERC20 Token')
    ->setBasePair('EUR')
    ->setBaseRate(1)/* optional */
    ->setCustomer(null)/* optional */
    ->setXpub('xpub6EsCk1uU6cJzqvP9CdsTiJwT2rF748YkPnhv5Qo8q44DG7nn2vbyt48YRsNSUYS44jFCW9gwvD9kLQu9AuqXpTpM1c5hgg9PsuBLdeNncid')
    ->setDerivationIndex(0)
    ->setMnemonic('urge pulp usage sister evidence arrest palm math please chief egg abuse')
    ->setIndex(0)
    ->setNonce(null)/* optional */;

// Shard to operate on
$arg_shard_id = 0;

try {
    /** @var \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->offOneDeployErc20OffchainMnemXpub($arg_deploy_erc20_offchain_mnem_xpub, $arg_shard_id);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->offOneDeployErc20OffchainMnemXpub(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->offOneDeployErc20OffchainMnemXpub(): " . $exc->getMessage() . PHP_EOL;
}