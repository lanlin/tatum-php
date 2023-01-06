<?php

/**
 * Implementation of Account API
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Api;
!defined("TATUM-SDK") && exit();

use InvalidArgumentException as IAE;
use Tatum\Sdk\Serializer as S;

/**
 * Account API
 */
class AccountApi extends AbstractApi {
    /**
     * Activate account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function activateAccount(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/account/{id}/activate", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Block an amount in an account
     *
     * @param string $id Account ID
     * @param \Tatum\Model\BlockAmount $block_amount 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function blockAmount(string $id, \Tatum\Model\BlockAmount $block_amount) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", S::parse("/v3/ledger/account/block/{id}", ["id" => $id]), [], $rHeaders, [], $block_amount
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Create multiple accounts in a batch call
     *
     * @param \Tatum\Model\CreateAccountBatch $create_account_batch 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account[]
     */
    public function createAccountBatch(\Tatum\Model\CreateAccountBatch $create_account_batch) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Account[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ledger/account/batch", [], $rHeaders, [], $create_account_batch
            ), 
            "\Tatum\Model\Account[]"
        );
            
        return $result;
    }
    
    /**
     * Deactivate account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deactivateAccount(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/account/{id}/deactivate", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Unblock all blocked amounts in an account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deleteAllBlockAmount(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "DELETE", S::parse("/v3/ledger/account/block/account/{id}", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Unblock a blocked amount in an account
     *
     * @param string $id Blockage ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deleteBlockAmount(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "DELETE", S::parse("/v3/ledger/account/block/{id}", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Freeze account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function freezeAccount(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/account/{id}/freeze", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Get account balance
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\AccountBalance
     */
    public function getAccountBalance(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\AccountBalance $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ledger/account/{id}/balance", ["id" => $id]), [], $rHeaders, []
            ), 
            "\Tatum\Model\AccountBalance"
        );
            
        return $result;
    }
    
    /**
     * Get account by ID
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account
     */
    public function getAccountByAccountId(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Account $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ledger/account/{id}", ["id" => $id]), [], $rHeaders, []
            ), 
            "\Tatum\Model\Account"
        );
            
        return $result;
    }
    
    /**
     * List all accounts
     *
     * @param float|null $page_size Max number of items per page is 50.
     * @param float|null $page Page number
     * @param string|null $sort Direction of sorting. Can be asc or desc
     * @param string|null $sort_by Sort by
     * @param bool|null $active Filter only active or non active accounts
     * @param bool|null $only_non_zero_balance Filter only accounts with non zero balances
     * @param bool|null $frozen Filter only frozen or non frozen accounts
     * @param string|null $currency Filter by currency
     * @param string|null $account_number Filter by account number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account[]
     */
    public function getAccounts(float $page_size = null, float $page = null, string $sort = null, string $sort_by = null, bool $active = null, bool $only_non_zero_balance = null, bool $frozen = null, string $currency = null, string $account_number = null) {
        if (isset($page_size) && $page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccounts, must be smaller than or equal to 50');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccounts, must be bigger than or equal to 1.');
        }

        if (isset($account_number) && strlen($account_number) > 50) {
            throw new IAE('Invalid length for "$account_number" when calling AccountApi.getAccounts, must be smaller than or equal to 50');
        }

        if (isset($account_number) && strlen($account_number) < 1) {
            throw new IAE('Invalid length for "$account_number" when calling AccountApi.getAccounts, must be bigger than or equal to 1');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Account[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/ledger/account", [
                    "pageSize" => isset($page_size) ? S::toQueryValue($page_size) : null,
                    "page" => isset($page) ? S::toQueryValue($page) : null,
                    "sort" => isset($sort) ? S::toQueryValue($sort) : null,
                    "sortBy" => isset($sort_by) ? S::toQueryValue($sort_by) : null,
                    "active" => isset($active) ? S::toQueryValue($active) : null,
                    "onlyNonZeroBalance" => isset($only_non_zero_balance) ? S::toQueryValue($only_non_zero_balance) : null,
                    "frozen" => isset($frozen) ? S::toQueryValue($frozen) : null,
                    "currency" => isset($currency) ? S::toQueryValue($currency) : null,
                    "accountNumber" => isset($account_number) ? S::toQueryValue($account_number) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Account[]"
        );
            
        return $result;
    }
    
    /**
     * List all customer accounts
     *
     * @param float $page_size Max number of items per page is 50.
     * @param string $id Internal customer ID
     * @param float|null $offset Offset to obtain the next page of data.
     * @param string|null $account_code For bookkeeping to distinct account purpose.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account[]
     */
    public function getAccountsByCustomerId(float $page_size, string $id, float $offset = null, string $account_code = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccountsByCustomerId, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccountsByCustomerId, must be bigger than or equal to 1.');
        }

        if (isset($account_code) && strlen($account_code) > 50) {
            throw new IAE('Invalid length for "$account_code" when calling AccountApi.getAccountsByCustomerId, must be smaller than or equal to 50');
        }

        if (isset($account_code) && strlen($account_code) < 1) {
            throw new IAE('Invalid length for "$account_code" when calling AccountApi.getAccountsByCustomerId, must be bigger than or equal to 1');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Account[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ledger/account/customer/{id}", ["id" => $id]), [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "accountCode" => isset($account_code) ? S::toQueryValue($account_code) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Account[]"
        );
            
        return $result;
    }
    
    /**
     * Count of found entities for get accounts request
     *
     * @param float|null $page_size Max number of items per page is 50.
     * @param float|null $page Page number
     * @param string|null $sort Direction of sorting. Can be asc or desc
     * @param string|null $sort_by Sort by
     * @param bool|null $active Filter only active or non active accounts
     * @param bool|null $only_non_zero_balance Filter only accounts with non zero balances
     * @param bool|null $frozen Filter only frozen or non frozen accounts
     * @param string|null $currency Filter by currency
     * @param string|null $account_number Filter by account number
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EntitiesCount
     */
    public function getAccountsCount(float $page_size = null, float $page = null, string $sort = null, string $sort_by = null, bool $active = null, bool $only_non_zero_balance = null, bool $frozen = null, string $currency = null, string $account_number = null) {
        if (isset($page_size) && $page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccountsCount, must be smaller than or equal to 50');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getAccountsCount, must be bigger than or equal to 1.');
        }

        if (isset($account_number) && strlen($account_number) > 50) {
            throw new IAE('Invalid length for "$account_number" when calling AccountApi.getAccountsCount, must be smaller than or equal to 50');
        }

        if (isset($account_number) && strlen($account_number) < 1) {
            throw new IAE('Invalid length for "$account_number" when calling AccountApi.getAccountsCount, must be bigger than or equal to 1');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\EntitiesCount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/ledger/account/count", [
                    "pageSize" => isset($page_size) ? S::toQueryValue($page_size) : null,
                    "page" => isset($page) ? S::toQueryValue($page) : null,
                    "sort" => isset($sort) ? S::toQueryValue($sort) : null,
                    "sortBy" => isset($sort_by) ? S::toQueryValue($sort_by) : null,
                    "active" => isset($active) ? S::toQueryValue($active) : null,
                    "onlyNonZeroBalance" => isset($only_non_zero_balance) ? S::toQueryValue($only_non_zero_balance) : null,
                    "frozen" => isset($frozen) ? S::toQueryValue($frozen) : null,
                    "currency" => isset($currency) ? S::toQueryValue($currency) : null,
                    "accountNumber" => isset($account_number) ? S::toQueryValue($account_number) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\EntitiesCount"
        );
            
        return $result;
    }
    
    /**
     * Get blocked amounts in an account
     *
     * @param string $id Account ID
     * @param float $page_size Max number of items per page is 50.
     * @param float|null $offset Offset to obtain the next page of data.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Blockage[]
     */
    public function getBlockAmount(string $id, float $page_size, float $offset = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getBlockAmount, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling AccountApi.getBlockAmount, must be bigger than or equal to 1.');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Blockage[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ledger/account/block/{id}", ["id" => $id]), [
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Blockage[]"
        );
            
        return $result;
    }
    
    /**
     * Get blocked amount by ID
     *
     * @param string $id Blocked amount ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Blockage
     */
    public function getBlockAmountById(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Blockage $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/ledger/account/block/{id}/detail", ["id" => $id]), [], $rHeaders, []
            ), 
            "\Tatum\Model\Blockage"
        );
            
        return $result;
    }
    
    /**
     * Create a virtual account
     *
     * @param \Tatum\Model\CreateAccount $create_account 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account
     */
    public function ledgerAccountCreateAccount(\Tatum\Model\CreateAccount $create_account) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Account $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ledger/account", [], $rHeaders, [], $create_account
            ), 
            "\Tatum\Model\Account"
        );
            
        return $result;
    }
    
    /**
     * Create a virtual account
     *
     * @param \Tatum\Model\CreateAccountXpub $create_account_xpub 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Account
     */
    public function ledgerAccountCreateAccountXpub(\Tatum\Model\CreateAccountXpub $create_account_xpub) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Account $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/ledger/account", [], $rHeaders, [], $create_account_xpub
            ), 
            "\Tatum\Model\Account"
        );
            
        return $result;
    }
    
    /**
     * Unblock an amount in an account and perform a transaction
     *
     * @param string $id Blockage ID
     * @param \Tatum\Model\UnblockAmount $unblock_amount 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\TransactionResult
     */
    public function unblockAmountWithTransaction(string $id, \Tatum\Model\UnblockAmount $unblock_amount) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\TransactionResult $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/account/block/{id}", ["id" => $id]), [], $rHeaders, [], $unblock_amount
            ), 
            "\Tatum\Model\TransactionResult"
        );
            
        return $result;
    }
    
    /**
     * Unfreeze account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function unfreezeAccount(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/account/{id}/unfreeze", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Update account
     *
     * @param string $id Account ID
     * @param \Tatum\Model\UpdateAccount $update_account 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function updateAccountByAccountId(string $id, \Tatum\Model\UpdateAccount $update_account) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "PUT", S::parse("/v3/ledger/account/{id}", ["id" => $id]), [], $rHeaders, [], $update_account
            )
        );
    }
    
}
