<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/NFTERC721OrCompatibleApi.md#mintnftkms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_mint_nft_kms = (new \Tatum\Model\MintNftKMS())
    ->setChain('ETH')
    ->setTo('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    ->setTokenId('123')
    ->setUrl('https://my_token_data.com')
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')
    ->setIndex(null)/* optional */
    ->setErc20('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')/* optional */
    ->setProvenance(true)/* optional */
    ->setAuthorAddresses(null)/* optional */
    ->setCashbackValues(null)/* optional */
    ->setFixedValues(null)/* optional */
    ->setNonce(null)/* optional */
    ->setFee(null)/* optional */;

// Type of Ethereum testnet. Defaults to Sepolia. Valid only for ETH invocations for testnet API Key. For mainnet API Key, this value is ignored.
$arg_x_testnet_type = "'ethereum-sepolia'";

try {
    /** @var \Tatum\Model\MintNftExpress200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->nFTERC721OrCompatible()
        ->mintNftKMS($arg_mint_nft_kms, $arg_x_testnet_type);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->nFTERC721OrCompatible()->mintNftKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->nFTERC721OrCompatible()->mintNftKMS(): " . $exc->getMessage() . PHP_EOL;
}