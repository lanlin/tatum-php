<?php
/**
 * Copyright (c) 2022-2023 tatum.io
 * 
 * @license MIT
 * @author  Mark Jivko
 * @see     SDK docs: https://github.com/tatumio/tatum-php/tree/master/docs/Api/FungibleTokensERC20OrCompatibleApi.md#erc20gettransactionbyaddress
 * 
 * SECURITY WARNING
 * Execute this file in CLI mode only!
 */
"cli" !== php_sapi_name() && exit();

// Use any PSR-4 autoloader
require_once dirname(__DIR__, 3) . "/autoload.php";

// Tatum SDK
$sdk = new \Tatum\Sdk();

// The blockchain to work with
$arg_chain = "CELO";

// Account address you want to get balance of
$arg_address = "0x8ce4e40889a13971681391aad29e88efaf91f784";

// Address of the token smart contract
$arg_token_address = "0x1ce4e40889a13971681391aad29e88efaf91f784";

// Max number of items per page is 50.
$arg_page_size = 10;

// Offset to obtain next page of the data.
$arg_offset = 0;

// Transactions from this block onwards will be included.
$arg_from = 1087623;

// Transactions up to this block will be included.
$arg_to = 1087823;

// Sorting of the data. ASC - oldest first, DESC - newest first.
$arg_sort = "ASC";

try {

    /** @var \Tatum\Model\FungibleTx[] $response */
    $response = $sdk->mainnet()
        ->api()
        ->fungibleTokensERC20OrCompatible()
        ->erc20GetTransactionByAddress($arg_chain, $arg_address, $arg_token_address, $arg_page_size, $arg_offset, $arg_from, $arg_to, $arg_sort);

    var_dump($response);

} catch (\Tatum\Sdk\ApiException $apiExc) {
    echo sprintf(
        "API Exception when calling api()->fungibleTokensERC20OrCompatible()->erc20GetTransactionByAddress(): %s\n", 
        var_export($apiExc->getResponseObject(), true)
    );
} catch (\Exception $exc) {
    echo sprintf(
        "Exception when calling api()->fungibleTokensERC20OrCompatible()->erc20GetTransactionByAddress(): %s\n", 
        $exc->getMessage()
    );
}