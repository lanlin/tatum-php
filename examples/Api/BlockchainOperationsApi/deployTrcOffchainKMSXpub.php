<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/BlockchainOperationsApi.md#deploytrcoffchainkmsxpub
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_deploy_trc_offchain_kms_xpub = (new \Tatum\Model\DeployTrcOffchainKMSXpub())
    ->setSymbol('MT')
    ->setSupply('10000000')
    ->setDecimals(6)
    ->setType('TRC10')
    ->setDescription('My TRC Token')
    ->setUrl('https://mytoken.com')/* optional */
    ->setBasePair('EUR')
    ->setBaseRate(1)/* optional */
    ->setCustomer(null)/* optional */
    ->setXpub('0244b3f40c6e570ae0032f6d7be87737a6c4e5314a4a1a82e22d0460a0d0cd794936c61f0c80dc74ace4cd04690d4eeb1aa6555883be006e1748306faa7ed3a26a')
    ->setDerivationIndex(0)
    ->setFrom('TVAEYCmc15awaDRAjUZ1kvcHwQQaoPw2CW')
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {
    /** @var \Tatum\Model\DeployErc20OffchainMnemonicAddress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->blockchainOperations()
        ->deployTrcOffchainKMSXpub($arg_deploy_trc_offchain_kms_xpub);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->blockchainOperations()->deployTrcOffchainKMSXpub(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->blockchainOperations()->deployTrcOffchainKMSXpub(): " . $exc->getMessage() . PHP_EOL;
}