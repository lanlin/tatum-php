<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/XRPApi.md#transferxrpblockchainkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_transfer_xrp_blockchain_kms = (new \Tatum\Model\TransferXrpBlockchainKMS())
    ->setFromAccount('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    ->setTo('rPRxSZzTFd6Yez3UMxFUPJvnhUhjewpjfV')
    ->setAmount('10000')
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setFee('10000')/* optional */
    ->setSourceTag(12355)/* optional */
    ->setDestinationTag(12355)/* optional */;

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->xRP()
        ->transferXrpBlockchainKMS($arg_transfer_xrp_blockchain_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->xRP()->transferXrpBlockchainKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->xRP()->transferXrpBlockchainKMS(): " . $exc->getMessage() . PHP_EOL;
}