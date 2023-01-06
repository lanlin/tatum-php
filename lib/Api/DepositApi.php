<?php

/**
 * Implementation of Deposit API
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
 * Deposit API
 */
class DepositApi extends AbstractApi {
    /**
     * List all deposits for product
     *
     * @param float|null $page_size Max number of items per page is 50.
     * @param float|null $page Page number
     * @param string|null $sort Direction of sorting. Can be asc or desc
     * @param string|null $status Status of the deposit
     * @param string|null $currency Filter by currency
     * @param string|null $tx_id Filter by txId
     * @param string|null $to Filter by to address
     * @param string|null $account_id Filter by account id
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Deposit[]
     */
    public function getDeposits(float $page_size = null, float $page = null, string $sort = null, string $status = null, string $currency = null, string $tx_id = null, string $to = null, string $account_id = null) {
        if (isset($page_size) && $page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling DepositApi.getDeposits, must be smaller than or equal to 50');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling DepositApi.getDeposits, must be bigger than or equal to 1.');
        }

        if (isset($tx_id) && strlen($tx_id) > 80) {
            throw new IAE('Invalid length for "$tx_id" when calling DepositApi.getDeposits, must be smaller than or equal to 80');
        }

        if (isset($tx_id) && strlen($tx_id) < 10) {
            throw new IAE('Invalid length for "$tx_id" when calling DepositApi.getDeposits, must be bigger than or equal to 10');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Deposit[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/ledger/deposits", [
                    "pageSize" => isset($page_size) ? S::toQueryValue($page_size) : null,
                    "page" => isset($page) ? S::toQueryValue($page) : null,
                    "sort" => isset($sort) ? S::toQueryValue($sort) : null,
                    "status" => isset($status) ? S::toQueryValue($status) : null,
                    "currency" => isset($currency) ? S::toQueryValue($currency) : null,
                    "txId" => isset($tx_id) ? S::toQueryValue($tx_id) : null,
                    "to" => isset($to) ? S::toQueryValue($to) : null,
                    "accountId" => isset($account_id) ? S::toQueryValue($account_id) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Deposit[]"
        );
            
        return $result;
    }
    
    /**
     * Count of found entities for get deposits request
     *
     * @param float|null $page_size Max number of items per page is 50.
     * @param float|null $page Page number
     * @param string|null $sort Direction of sorting. Can be asc or desc
     * @param string|null $status Type of the deposit
     * @param string|null $currency Filter by currency
     * @param string|null $tx_id Filter by txId
     * @param string|null $to Filter by to address
     * @param string|null $account_id Filter by account id
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\EntitiesCount
     */
    public function getDepositsCount(float $page_size = null, float $page = null, string $sort = null, string $status = null, string $currency = null, string $tx_id = null, string $to = null, string $account_id = null) {
        if (isset($page_size) && $page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling DepositApi.getDepositsCount, must be smaller than or equal to 50');
        }

        if (isset($page_size) && $page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling DepositApi.getDepositsCount, must be bigger than or equal to 1.');
        }

        if (isset($tx_id) && strlen($tx_id) > 80) {
            throw new IAE('Invalid length for "$tx_id" when calling DepositApi.getDepositsCount, must be smaller than or equal to 80');
        }

        if (isset($tx_id) && strlen($tx_id) < 10) {
            throw new IAE('Invalid length for "$tx_id" when calling DepositApi.getDepositsCount, must be bigger than or equal to 10');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\EntitiesCount $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/ledger/deposits/count", [
                    "pageSize" => isset($page_size) ? S::toQueryValue($page_size) : null,
                    "page" => isset($page) ? S::toQueryValue($page) : null,
                    "sort" => isset($sort) ? S::toQueryValue($sort) : null,
                    "status" => isset($status) ? S::toQueryValue($status) : null,
                    "currency" => isset($currency) ? S::toQueryValue($currency) : null,
                    "txId" => isset($tx_id) ? S::toQueryValue($tx_id) : null,
                    "to" => isset($to) ? S::toQueryValue($to) : null,
                    "accountId" => isset($account_id) ? S::toQueryValue($account_id) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\EntitiesCount"
        );
            
        return $result;
    }
    
}
