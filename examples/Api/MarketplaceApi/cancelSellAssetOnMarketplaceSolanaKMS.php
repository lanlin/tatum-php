<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MarketplaceApi.md#cancelsellassetonmarketplacesolanakms
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_cancel_sell_asset_on_marketplace_solana_kms = (new \Tatum\Model\CancelSellAssetOnMarketplaceSolanaKMS())
    ->setChain('SOL')
    ->setContractAddress('FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU')
    ->setListingId(FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU)
    ->setFrom(FZAS4mtPvswgVxbpc117SqfNgCDLTCtk5CoeAtt58FWU)
    ->setAuthoritySignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83')/* optional */
    ->setSignatureId('26d3883e-4e17-48b3-a0ee-09a3e484ac83');

try {
    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->marketplace()
        ->cancelSellAssetOnMarketplaceSolanaKMS($arg_cancel_sell_asset_on_marketplace_solana_kms);

    var_dump($response);
} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo "API Exception when calling api()->marketplace()->cancelSellAssetOnMarketplaceSolanaKMS(): ", var_export($apiExc->getResponseObject(), true), PHP_EOL;
} catch (\Exception $exc) {
    echo "Exception when calling api()->marketplace()->cancelSellAssetOnMarketplaceSolanaKMS(): " . $exc->getMessage() . PHP_EOL;
}