<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FlowApi.md#flowcustomtransactionkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_flow_custom_transaction_kms = (new \Tatum\Model\FlowCustomTransactionKMS())
    ->setAccount('0x955cd3f17b2fd8ad')
    ->setTransaction('transaction(publicKey: String) {
  prepare(signer: AuthAccount) {
    signer.addPublicKey(publicKey.decodeHex())
  }
}
')
    ->setArgs(null)
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setIndex(null)/* optional */;

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->flow()
        ->flowCustomTransactionKMS($arg_flow_custom_transaction_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->flow()->flowCustomTransactionKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->flow()->flowCustomTransactionKMS(): " . $exc->getMessage() . PHP_EOL;
}