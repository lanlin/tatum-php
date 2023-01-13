<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MultiTokensERC1155OrCompatibleApi.md#transfermultitokenkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_multi_token_kms = (new \Tatum\Model\TransferMultiTokenKMS())
    ->setChain('ETH')
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setTokenId('100000')
    ->setAmount('100000')
    ->setData('0x1234')/* optional */
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setIndex(null)/* optional */
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setNonce(1)/* optional */
    ->setFee(null)/* optional */;

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$arg_x_testnet_type = "'ethereum-sepolia'";

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->transferMultiTokenKMS($arg_transfer_multi_token_kms, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->multiTokensERC1155OrCompatible()->transferMultiTokenKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->multiTokensERC1155OrCompatible()->transferMultiTokenKMS(): " . $exc->getMessage() . PHP_EOL;
}