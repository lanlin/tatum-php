<?php

/**
 * Implementation of OrderBook API
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
 * OrderBook API
 */
class OrderBookApi extends AbstractApi {
    /**
     * Obtain chart data from historical closed trades
     *
     * @param \Tatum\Model\ChartRequest $chart_request 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Chart[]
     */
    public function chartRequest(\Tatum\Model\ChartRequest $chart_request) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Chart[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/trade/chart", [], $rHeaders, [], $chart_request
            ), 
            "\Tatum\Model\Chart[]"
        );
            
        return $result;
    }
    
    /**
     * Cancel all existing trades for account
     *
     * @param string $id Account ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deleteAccountTrades(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "DELETE", S::parse("/v3/trade/account/{id}", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * Cancel existing trade
     *
     * @param string $id Trade ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return void
     */
    public function deleteTrade(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        $this->exec(
            S::createRequest(
                $this->_caller->config(), "DELETE", S::parse("/v3/trade/{id}", ["id" => $id]), [], $rHeaders, []
            )
        );
    }
    
    /**
     * List all active buy trades
     *
     * @param float $page_size Max number of items per page is 50.
     * @param string|null $id Account ID. If present, list current active buy trades for that account.
     * @param string|null $customer_id Customer ID. If present, list current active buy trades for that customer.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param string|null $pair Trade pair. If present, list current active buy trades for that pair.
     * @param bool|null $count Get the total trade pair count based on the filter. Either count or pageSize is accepted.
     * @param string|null $trade_type Trade type.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getBuyTrades(float $page_size, string $id = null, string $customer_id = null, float $offset = null, string $pair = null, bool $count = null, string $trade_type = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling OrderBookApi.getBuyTrades, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling OrderBookApi.getBuyTrades, must be bigger than or equal to 1.');
        }

        if (isset($pair) && strlen($pair) > 30) {
            throw new IAE('Invalid length for "$pair" when calling OrderBookApi.getBuyTrades, must be smaller than or equal to 30');
        }

        if (isset($pair) && strlen($pair) < 3) {
            throw new IAE('Invalid length for "$pair" when calling OrderBookApi.getBuyTrades, must be bigger than or equal to 3');
        }

        if (isset($pair) && !preg_match("/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", $pair)) {
            throw new IAE('Invalid value for "$pair" when calling OrderBookApi.getBuyTrades, must conform to the pattern /^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Trade[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/trade/buy", [
                    "id" => isset($id) ? S::toQueryValue($id) : null,
                    "customerId" => isset($customer_id) ? S::toQueryValue($customer_id) : null,
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "pair" => isset($pair) ? S::toQueryValue($pair) : null,
                    "count" => isset($count) ? S::toQueryValue($count) : null,
                    "tradeType" => isset($trade_type) ? S::toQueryValue($trade_type) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Trade[]"
        );
            
        return $result;
    }
    
    /**
     * List all active buy trades
     *
     * @param \Tatum\Model\ListOderBookActiveBuyBody $list_oder_book_active_buy_body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getBuyTradesBody(\Tatum\Model\ListOderBookActiveBuyBody $list_oder_book_active_buy_body) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Trade[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/trade/buy", [], $rHeaders, [], $list_oder_book_active_buy_body
            ), 
            "\Tatum\Model\Trade[]"
        );
            
        return $result;
    }
    
    /**
     * List all historical trades
     *
     * @param float $page_size Max number of items per page is 50.
     * @param string|null $id Account ID. If present, only closed trades for given account will be present.
     * @param string|null $pair Trade pair. If present, only closed trades on given trade pair will be present.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param bool|null $count Get the total trade pair count based on the filter. Either count or pageSize is accepted.
     * @param string[]|null $types Trade types.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getHistoricalTrades(float $page_size, string $id = null, string $pair = null, float $offset = null, bool $count = null, array $types = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling OrderBookApi.getHistoricalTrades, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling OrderBookApi.getHistoricalTrades, must be bigger than or equal to 1.');
        }

        if (isset($pair) && strlen($pair) > 30) {
            throw new IAE('Invalid length for "$pair" when calling OrderBookApi.getHistoricalTrades, must be smaller than or equal to 30');
        }

        if (isset($pair) && strlen($pair) < 3) {
            throw new IAE('Invalid length for "$pair" when calling OrderBookApi.getHistoricalTrades, must be bigger than or equal to 3');
        }

        if (isset($pair) && !preg_match("/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", $pair)) {
            throw new IAE('Invalid value for "$pair" when calling OrderBookApi.getHistoricalTrades, must conform to the pattern /^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Trade[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/trade/history", [
                    "id" => isset($id) ? S::toQueryValue($id) : null,
                    "pair" => isset($pair) ? S::toQueryValue($pair) : null,
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "count" => isset($count) ? S::toQueryValue($count) : null,
                    "types" => isset($types) ? S::serializeCollection($types, "multi") : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Trade[]"
        );
            
        return $result;
    }
    
    /**
     * List all historical trades
     *
     * @param \Tatum\Model\ListOderBookHistoryBody|null $list_oder_book_history_body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getHistoricalTradesBody(\Tatum\Model\ListOderBookHistoryBody $list_oder_book_history_body = null) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Trade[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/trade/history", [], $rHeaders, [], $list_oder_book_history_body
            ), 
            "\Tatum\Model\Trade[]"
        );
            
        return $result;
    }
    
    /**
     * List all matched orders from FUTURE_SELL/FUTURE_BUY trades
     *
     * @param \Tatum\Model\ListOderBookMatchedBody $list_oder_book_matched_body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getMatchedTrades(\Tatum\Model\ListOderBookMatchedBody $list_oder_book_matched_body) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Trade[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/trade/matched", [], $rHeaders, [], $list_oder_book_matched_body
            ), 
            "\Tatum\Model\Trade[]"
        );
            
        return $result;
    }
    
    /**
     * List all active sell trades
     *
     * @param float $page_size Max number of items per page is 50.
     * @param string|null $id Account ID. If present, list current active sell trades for that account.
     * @param string|null $customer_id Customer ID. If present, list current active buy trades for that customer.
     * @param float|null $offset Offset to obtain next page of the data.
     * @param string|null $pair Trade pair. If present, list current active sell trades for that pair.
     * @param bool|null $count Get the total trade pair count based on the filter. Either count or pageSize is accepted.
     * @param string|null $trade_type Trade type.
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getSellTrades(float $page_size, string $id = null, string $customer_id = null, float $offset = null, string $pair = null, bool $count = null, string $trade_type = null) {
        if ($page_size > 50) {
            throw new IAE('Invalid value for "$page_size" when calling OrderBookApi.getSellTrades, must be smaller than or equal to 50');
        }

        if ($page_size < 1) {
            throw new IAE('Invalid value for "$page_size" when calling OrderBookApi.getSellTrades, must be bigger than or equal to 1.');
        }

        if (isset($pair) && strlen($pair) > 30) {
            throw new IAE('Invalid length for "$pair" when calling OrderBookApi.getSellTrades, must be smaller than or equal to 30');
        }

        if (isset($pair) && strlen($pair) < 3) {
            throw new IAE('Invalid length for "$pair" when calling OrderBookApi.getSellTrades, must be bigger than or equal to 3');
        }

        if (isset($pair) && !preg_match("/^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/", $pair)) {
            throw new IAE('Invalid value for "$pair" when calling OrderBookApi.getSellTrades, must conform to the pattern /^[A-a-zZ0-9_\\-]+\/[A-Za-z0-9_\\-]+$/');
        }

        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Trade[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", "/v3/trade/sell", [
                    "id" => isset($id) ? S::toQueryValue($id) : null,
                    "customerId" => isset($customer_id) ? S::toQueryValue($customer_id) : null,
                    "pageSize" => S::toQueryValue($page_size),
                    "offset" => isset($offset) ? S::toQueryValue($offset) : null,
                    "pair" => isset($pair) ? S::toQueryValue($pair) : null,
                    "count" => isset($count) ? S::toQueryValue($count) : null,
                    "tradeType" => isset($trade_type) ? S::toQueryValue($trade_type) : null,
                ], $rHeaders, []
            ), 
            "\Tatum\Model\Trade[]"
        );
            
        return $result;
    }
    
    /**
     * List all active sell trades
     *
     * @param \Tatum\Model\ListOderBookActiveSellBody $list_oder_book_active_sell_body 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade[]
     */
    public function getSellTradesBody(\Tatum\Model\ListOderBookActiveSellBody $list_oder_book_active_sell_body) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Trade[] $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/trade/sell", [], $rHeaders, [], $list_oder_book_active_sell_body
            ), 
            "\Tatum\Model\Trade[]"
        );
            
        return $result;
    }
    
    /**
     * Get existing trade
     *
     * @param string $id Trade ID
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Trade
     */
    public function getTradeById(string $id) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], []);

        /** @var \Tatum\Model\Trade $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "GET", S::parse("/v3/trade/{id}", ["id" => $id]), [], $rHeaders, []
            ), 
            "\Tatum\Model\Trade"
        );
            
        return $result;
    }
    
    /**
     * Store buy / sell trade
     *
     * @param \Tatum\Model\CreateFutureTrade $create_future_trade 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function tradeCreateFutureTrade(\Tatum\Model\CreateFutureTrade $create_future_trade) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/trade", [], $rHeaders, [], $create_future_trade
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
    /**
     * Store buy / sell trade
     *
     * @param \Tatum\Model\CreateTrade $create_trade 
     * @throws \Tatum\Sdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * 
     * @return \Tatum\Model\Id
     */
    public function tradeCreateTrade(\Tatum\Model\CreateTrade $create_trade) {
        $rHeaders = $this->_headerSelector->selectHeaders(["application/json"], ["application/json"]);

        /** @var \Tatum\Model\Id $result */
        $result = $this->exec(
            S::createRequest(
                $this->_caller->config(), "POST", "/v3/trade", [], $rHeaders, [], $create_trade
            ), 
            "\Tatum\Model\Id"
        );
            
        return $result;
    }
    
}
