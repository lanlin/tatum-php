<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/MultiTokensERC1155OrCompatibleApi.md#burnmultitokenbatch
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

$arg_burn_multi_token_batch = (new \Tatum\Model\BurnMultiTokenBatch())
    
    // Chain to work with.
    ->setChain('ETH')
    
    // Address of holder
    ->setAccount('0x4b812a77b109A150C2Fc89eD133EaBC78bC9EC8f')
    
    // The IDs of the Multi Tokens to be destroyed.
    ->setTokenId(["1000","1001"])
    
    // The amounts of the Multi Tokens to be destroyed.
    ->setAmounts(["10","10"])
    
    // (optional) Data in bytes
    ->setData('0x1234')
    
    // The address of the Multi Token smart contract
    ->setContractAddress('0x687422eEA2cB73B5d3e242bA5456b782919AFc85')
    
    // Private key of sender address. Private key, or signature Id must be present.
    ->setFromPrivateKey('0x05e150c73f1920ec14caa1e0b6aa09940899678051a78542840c2668ce5080c2')
    
    // (optional) Nonce to be set to transaction. If not present, last known nonce will be used.
    ->setNonce(null)
    
    // (optional) 
    ->setFee(null);

// Type of testnet. Defaults to Sepolia. Valid only for ETH invocations.
$arg_x_testnet_type = 'ethereum-sepolia';

try {

    /** @var \Tatum\Model\TransactionSigned $response */
    $response = $sdk->mainnet()
        ->api()
        ->multiTokensERC1155OrCompatible()
        ->burnMultiTokenBatch($arg_burn_multi_token_batch, $arg_x_testnet_type);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatch(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->multiTokensERC1155OrCompatible()->burnMultiTokenBatch(): %s\n", 
        $exc->getMessage()
    );
}