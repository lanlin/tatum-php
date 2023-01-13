<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#sellassetonmarketplacesolana
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_sell_asset_on_marketplace_solana = (new \Tatum\Model\SellAssetOnMarketplaceSolana())
    ->setChain('SOL')
    ->setContractAddress('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    ->setNftAddress('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    ->setFrom(FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU)
    ->setPrice('100000')
    ->setAuthorityPrivateKey('zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv')/* optional */
    ->setFromPrivateKey('zgsAKfjuXrAxEyuYRxbbxPM3rdsPbJPnGreaGMbcdUApJ6wHnCqQnf9b1RNPdeZxsRMkezh4VgXQ7YrbpndGtEv');

try {
    /** @var \Tatum\Model\SellAssetOnMarketplace200Response $response */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->sellAssetOnMarketplaceSolana($arg_sell_asset_on_marketplace_solana);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->sellAssetOnMarketplaceSolana(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->sellAssetOnMarketplaceSolana(): " . $exc->getMessage() . PHP_EOL;
}