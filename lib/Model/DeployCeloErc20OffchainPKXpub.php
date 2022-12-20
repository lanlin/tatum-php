<?php

/**
 * DeployCeloErc20OffchainPKXpub Model
 *
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */

namespace Tatum\Model;

use InvalidArgumentException as IAE;

/**
 * DeployCeloErc20OffchainPKXpub Model
 */
class DeployCeloErc20OffchainPKXpub extends AbstractModel {

    public const DISCRIMINATOR = null;
    public const BASE_PAIR_AED = 'AED';
    public const BASE_PAIR_AFN = 'AFN';
    public const BASE_PAIR_ALL = 'ALL';
    public const BASE_PAIR_AMD = 'AMD';
    public const BASE_PAIR_ANG = 'ANG';
    public const BASE_PAIR_AOA = 'AOA';
    public const BASE_PAIR_ARS = 'ARS';
    public const BASE_PAIR_AUD = 'AUD';
    public const BASE_PAIR_AWG = 'AWG';
    public const BASE_PAIR_AZN = 'AZN';
    public const BASE_PAIR_BAM = 'BAM';
    public const BASE_PAIR_BAT = 'BAT';
    public const BASE_PAIR_BBD = 'BBD';
    public const BASE_PAIR_BCH = 'BCH';
    public const BASE_PAIR_BDT = 'BDT';
    public const BASE_PAIR_BGN = 'BGN';
    public const BASE_PAIR_BHD = 'BHD';
    public const BASE_PAIR_BIF = 'BIF';
    public const BASE_PAIR_BMD = 'BMD';
    public const BASE_PAIR_BND = 'BND';
    public const BASE_PAIR_BOB = 'BOB';
    public const BASE_PAIR_BRL = 'BRL';
    public const BASE_PAIR_BSD = 'BSD';
    public const BASE_PAIR_BTC = 'BTC';
    public const BASE_PAIR_BTN = 'BTN';
    public const BASE_PAIR_BWP = 'BWP';
    public const BASE_PAIR_BYN = 'BYN';
    public const BASE_PAIR_BYR = 'BYR';
    public const BASE_PAIR_BZD = 'BZD';
    public const BASE_PAIR_CAD = 'CAD';
    public const BASE_PAIR_CDF = 'CDF';
    public const BASE_PAIR_CHF = 'CHF';
    public const BASE_PAIR_CLF = 'CLF';
    public const BASE_PAIR_CLP = 'CLP';
    public const BASE_PAIR_CNY = 'CNY';
    public const BASE_PAIR_COP = 'COP';
    public const BASE_PAIR_CRC = 'CRC';
    public const BASE_PAIR_CUC = 'CUC';
    public const BASE_PAIR_CUP = 'CUP';
    public const BASE_PAIR_CVE = 'CVE';
    public const BASE_PAIR_CZK = 'CZK';
    public const BASE_PAIR_DJF = 'DJF';
    public const BASE_PAIR_DKK = 'DKK';
    public const BASE_PAIR_DOP = 'DOP';
    public const BASE_PAIR_DOGE = 'DOGE';
    public const BASE_PAIR_DZD = 'DZD';
    public const BASE_PAIR_EGP = 'EGP';
    public const BASE_PAIR_ERN = 'ERN';
    public const BASE_PAIR_ETB = 'ETB';
    public const BASE_PAIR_ETH = 'ETH';
    public const BASE_PAIR_EUR = 'EUR';
    public const BASE_PAIR_FJD = 'FJD';
    public const BASE_PAIR_FKP = 'FKP';
    public const BASE_PAIR_FLOW = 'FLOW';
    public const BASE_PAIR_FUSD = 'FUSD';
    public const BASE_PAIR_FREE = 'FREE';
    public const BASE_PAIR_GMC = 'GMC';
    public const BASE_PAIR_GMC_BSC = 'GMC_BSC';
    public const BASE_PAIR_RMD = 'RMD';
    public const BASE_PAIR_GBP = 'GBP';
    public const BASE_PAIR_GEL = 'GEL';
    public const BASE_PAIR_GGP = 'GGP';
    public const BASE_PAIR_GHS = 'GHS';
    public const BASE_PAIR_GIP = 'GIP';
    public const BASE_PAIR_GMD = 'GMD';
    public const BASE_PAIR_GNF = 'GNF';
    public const BASE_PAIR_GTQ = 'GTQ';
    public const BASE_PAIR_GYD = 'GYD';
    public const BASE_PAIR_HKD = 'HKD';
    public const BASE_PAIR_HNL = 'HNL';
    public const BASE_PAIR_HRK = 'HRK';
    public const BASE_PAIR_HTG = 'HTG';
    public const BASE_PAIR_HUF = 'HUF';
    public const BASE_PAIR_IDR = 'IDR';
    public const BASE_PAIR_ILS = 'ILS';
    public const BASE_PAIR_IMP = 'IMP';
    public const BASE_PAIR_INR = 'INR';
    public const BASE_PAIR_IQD = 'IQD';
    public const BASE_PAIR_IRR = 'IRR';
    public const BASE_PAIR_ISK = 'ISK';
    public const BASE_PAIR_JEP = 'JEP';
    public const BASE_PAIR_JMD = 'JMD';
    public const BASE_PAIR_JOD = 'JOD';
    public const BASE_PAIR_JPY = 'JPY';
    public const BASE_PAIR_KES = 'KES';
    public const BASE_PAIR_KGS = 'KGS';
    public const BASE_PAIR_KHR = 'KHR';
    public const BASE_PAIR_KMF = 'KMF';
    public const BASE_PAIR_KPW = 'KPW';
    public const BASE_PAIR_KRW = 'KRW';
    public const BASE_PAIR_KWD = 'KWD';
    public const BASE_PAIR_KYD = 'KYD';
    public const BASE_PAIR_KZT = 'KZT';
    public const BASE_PAIR_LAK = 'LAK';
    public const BASE_PAIR_LBP = 'LBP';
    public const BASE_PAIR_LEO = 'LEO';
    public const BASE_PAIR_LINK = 'LINK';
    public const BASE_PAIR_LKR = 'LKR';
    public const BASE_PAIR_LRD = 'LRD';
    public const BASE_PAIR_LSL = 'LSL';
    public const BASE_PAIR_LTC = 'LTC';
    public const BASE_PAIR_LTL = 'LTL';
    public const BASE_PAIR_LVL = 'LVL';
    public const BASE_PAIR_LYD = 'LYD';
    public const BASE_PAIR_MAD = 'MAD';
    public const BASE_PAIR_MDL = 'MDL';
    public const BASE_PAIR_MGA = 'MGA';
    public const BASE_PAIR_MKD = 'MKD';
    public const BASE_PAIR_MKR = 'MKR';
    public const BASE_PAIR_MMK = 'MMK';
    public const BASE_PAIR_MMY = 'MMY';
    public const BASE_PAIR_MNT = 'MNT';
    public const BASE_PAIR_MOP = 'MOP';
    public const BASE_PAIR_MRO = 'MRO';
    public const BASE_PAIR_MUR = 'MUR';
    public const BASE_PAIR_MVR = 'MVR';
    public const BASE_PAIR_MWK = 'MWK';
    public const BASE_PAIR_MXN = 'MXN';
    public const BASE_PAIR_MYR = 'MYR';
    public const BASE_PAIR_MZN = 'MZN';
    public const BASE_PAIR_NAD = 'NAD';
    public const BASE_PAIR_NGN = 'NGN';
    public const BASE_PAIR_NIO = 'NIO';
    public const BASE_PAIR_NOK = 'NOK';
    public const BASE_PAIR_NPR = 'NPR';
    public const BASE_PAIR_NZD = 'NZD';
    public const BASE_PAIR_OMR = 'OMR';
    public const BASE_PAIR_PAB = 'PAB';
    public const BASE_PAIR_PAX = 'PAX';
    public const BASE_PAIR_PAXG = 'PAXG';
    public const BASE_PAIR_PEN = 'PEN';
    public const BASE_PAIR_PGK = 'PGK';
    public const BASE_PAIR_PHP = 'PHP';
    public const BASE_PAIR_PKR = 'PKR';
    public const BASE_PAIR_PLN = 'PLN';
    public const BASE_PAIR_PYG = 'PYG';
    public const BASE_PAIR_QAR = 'QAR';
    public const BASE_PAIR_RON = 'RON';
    public const BASE_PAIR_RSD = 'RSD';
    public const BASE_PAIR_RUB = 'RUB';
    public const BASE_PAIR_RWF = 'RWF';
    public const BASE_PAIR_SAR = 'SAR';
    public const BASE_PAIR_SBD = 'SBD';
    public const BASE_PAIR_SCR = 'SCR';
    public const BASE_PAIR_SDG = 'SDG';
    public const BASE_PAIR_SEK = 'SEK';
    public const BASE_PAIR_SGD = 'SGD';
    public const BASE_PAIR_SHP = 'SHP';
    public const BASE_PAIR_SLL = 'SLL';
    public const BASE_PAIR_SOS = 'SOS';
    public const BASE_PAIR_SRD = 'SRD';
    public const BASE_PAIR_STD = 'STD';
    public const BASE_PAIR_SVC = 'SVC';
    public const BASE_PAIR_SYP = 'SYP';
    public const BASE_PAIR_SZL = 'SZL';
    public const BASE_PAIR_THB = 'THB';
    public const BASE_PAIR_TJS = 'TJS';
    public const BASE_PAIR_TMT = 'TMT';
    public const BASE_PAIR_TND = 'TND';
    public const BASE_PAIR_TOP = 'TOP';
    public const BASE_PAIR__TRY = 'TRY';
    public const BASE_PAIR_TTD = 'TTD';
    public const BASE_PAIR_TRON = 'TRON';
    public const BASE_PAIR_TUSD = 'TUSD';
    public const BASE_PAIR_BUSD = 'BUSD';
    public const BASE_PAIR_TWD = 'TWD';
    public const BASE_PAIR_TZS = 'TZS';
    public const BASE_PAIR_UAH = 'UAH';
    public const BASE_PAIR_UGX = 'UGX';
    public const BASE_PAIR_UNI = 'UNI';
    public const BASE_PAIR_USD = 'USD';
    public const BASE_PAIR_USDC = 'USDC';
    public const BASE_PAIR_USDT = 'USDT';
    public const BASE_PAIR_USDT_TRON = 'USDT_TRON';
    public const BASE_PAIR_USDT_MATIC = 'USDT_MATIC';
    public const BASE_PAIR_UYU = 'UYU';
    public const BASE_PAIR_UZS = 'UZS';
    public const BASE_PAIR_VEF = 'VEF';
    public const BASE_PAIR_VND = 'VND';
    public const BASE_PAIR_VUV = 'VUV';
    public const BASE_PAIR_WBTC = 'WBTC';
    public const BASE_PAIR_WST = 'WST';
    public const BASE_PAIR_XAF = 'XAF';
    public const BASE_PAIR_XAG = 'XAG';
    public const BASE_PAIR_XAU = 'XAU';
    public const BASE_PAIR_XCD = 'XCD';
    public const BASE_PAIR_XCON = 'XCON';
    public const BASE_PAIR_XDR = 'XDR';
    public const BASE_PAIR_XLM = 'XLM';
    public const BASE_PAIR_XOF = 'XOF';
    public const BASE_PAIR_XPF = 'XPF';
    public const BASE_PAIR_XRP = 'XRP';
    public const BASE_PAIR_YER = 'YER';
    public const BASE_PAIR_ZAR = 'ZAR';
    public const BASE_PAIR_ZMK = 'ZMK';
    public const BASE_PAIR_ZMW = 'ZMW';
    public const BASE_PAIR_ZWL = 'ZWL';
    public const FEE_CURRENCY_CELO = 'CELO';
    public const FEE_CURRENCY_CUSD = 'CUSD';
    public const FEE_CURRENCY_CEUR = 'CEUR';
    protected static $_name = "DeployCeloErc20OffchainPKXpub";
    protected static $_definition = [
        "symbol" => ["symbol", "string", null, "getSymbol", "setSymbol"], 
        "supply" => ["supply", "string", null, "getSupply", "setSupply"], 
        "description" => ["description", "string", null, "getDescription", "setDescription"], 
        "base_pair" => ["basePair", "string", null, "getBasePair", "setBasePair"], 
        "base_rate" => ["baseRate", "float", null, "getBaseRate", "setBaseRate"], 
        "customer" => ["customer", "\Tatum\Model\CustomerRegistration", null, "getCustomer", "setCustomer"], 
        "xpub" => ["xpub", "string", null, "getXpub", "setXpub"], 
        "derivation_index" => ["derivationIndex", "int", 'int32', "getDerivationIndex", "setDerivationIndex"], 
        "private_key" => ["privateKey", "string", null, "getPrivateKey", "setPrivateKey"], 
        "nonce" => ["nonce", "float", null, "getNonce", "setNonce"], 
        "fee_currency" => ["feeCurrency", "string", null, "getFeeCurrency", "setFeeCurrency"]
    ];

    /**
     * DeployCeloErc20OffchainPKXpub
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(["symbol"=>null, "supply"=>null, "description"=>null, "base_pair"=>null, "base_rate"=>1, "customer"=>null, "xpub"=>null, "derivation_index"=>null, "private_key"=>null, "nonce"=>null, "fee_currency"=>null] as $k => $v) {
            $this->_data[$k] = $data[$k] ?? $v;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        if (is_null($this->_data['symbol'])) {
            $ip[] = "'symbol' can't be null";
        }
        if ((mb_strlen($this->_data['symbol']) > 30)) {
            $ip[] = "'symbol' length must be <= 30";
        }
        if ((mb_strlen($this->_data['symbol']) < 1)) {
            $ip[] = "'symbol' length must be >= 1";
        }
        if (!preg_match("/^[a-zA-Z0-9_]+$/", $this->_data['symbol'])) {
            $ip[] = "'symbol' must match /^[a-zA-Z0-9_]+$/";
        }
        if (is_null($this->_data['supply'])) {
            $ip[] = "'supply' can't be null";
        }
        if ((mb_strlen($this->_data['supply']) > 38)) {
            $ip[] = "'supply' length must be <= 38";
        }
        if (!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $this->_data['supply'])) {
            $ip[] = "'supply' must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/";
        }
        if (is_null($this->_data['description'])) {
            $ip[] = "'description' can't be null";
        }
        if ((mb_strlen($this->_data['description']) > 100)) {
            $ip[] = "'description' length must be <= 100";
        }
        if ((mb_strlen($this->_data['description']) < 1)) {
            $ip[] = "'description' length must be >= 1";
        }
        if (is_null($this->_data['base_pair'])) {
            $ip[] = "'base_pair' can't be null";
        }
        $allowed = $this->getBasePairAllowableValues();
        $value = $this->_data['base_pair'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'base_pair' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        if ((mb_strlen($this->_data['base_pair']) > 30)) {
            $ip[] = "'base_pair' length must be <= 30";
        }
        if ((mb_strlen($this->_data['base_pair']) < 2)) {
            $ip[] = "'base_pair' length must be >= 2";
        }
        if (!is_null($this->_data['base_rate']) && ($this->_data['base_rate'] < 0)) {
            $ip[] = "'base_rate' must be >= 0";
        }
        if (is_null($this->_data['xpub'])) {
            $ip[] = "'xpub' can't be null";
        }
        if ((mb_strlen($this->_data['xpub']) > 150)) {
            $ip[] = "'xpub' length must be <= 150";
        }
        if ((mb_strlen($this->_data['xpub']) < 1)) {
            $ip[] = "'xpub' length must be >= 1";
        }
        if (is_null($this->_data['derivation_index'])) {
            $ip[] = "'derivation_index' can't be null";
        }
        if (($this->_data['derivation_index'] > 2147483647)) {
            $ip[] = "'derivation_index' must be <= 2147483647";
        }
        if (is_null($this->_data['private_key'])) {
            $ip[] = "'private_key' can't be null";
        }
        if ((mb_strlen($this->_data['private_key']) > 66)) {
            $ip[] = "'private_key' length must be <= 66";
        }
        if ((mb_strlen($this->_data['private_key']) < 66)) {
            $ip[] = "'private_key' length must be >= 66";
        }
        if (!is_null($this->_data['nonce']) && ($this->_data['nonce'] < 0)) {
            $ip[] = "'nonce' must be >= 0";
        }
        if (is_null($this->_data['fee_currency'])) {
            $ip[] = "'fee_currency' can't be null";
        }
        $allowed = $this->getFeeCurrencyAllowableValues();
        $value = $this->_data['fee_currency'];
        if (!is_null($value) && !in_array($value, $allowed, true)) {
            $ip[] = sprintf("'fee_currency' invalid value '%s', must be one of '%s'", $value, implode("', '", $allowed));
        }
        
        return $ip;
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getBasePairAllowableValues(): array {
        return [
            self::BASE_PAIR_AED,
            self::BASE_PAIR_AFN,
            self::BASE_PAIR_ALL,
            self::BASE_PAIR_AMD,
            self::BASE_PAIR_ANG,
            self::BASE_PAIR_AOA,
            self::BASE_PAIR_ARS,
            self::BASE_PAIR_AUD,
            self::BASE_PAIR_AWG,
            self::BASE_PAIR_AZN,
            self::BASE_PAIR_BAM,
            self::BASE_PAIR_BAT,
            self::BASE_PAIR_BBD,
            self::BASE_PAIR_BCH,
            self::BASE_PAIR_BDT,
            self::BASE_PAIR_BGN,
            self::BASE_PAIR_BHD,
            self::BASE_PAIR_BIF,
            self::BASE_PAIR_BMD,
            self::BASE_PAIR_BND,
            self::BASE_PAIR_BOB,
            self::BASE_PAIR_BRL,
            self::BASE_PAIR_BSD,
            self::BASE_PAIR_BTC,
            self::BASE_PAIR_BTN,
            self::BASE_PAIR_BWP,
            self::BASE_PAIR_BYN,
            self::BASE_PAIR_BYR,
            self::BASE_PAIR_BZD,
            self::BASE_PAIR_CAD,
            self::BASE_PAIR_CDF,
            self::BASE_PAIR_CHF,
            self::BASE_PAIR_CLF,
            self::BASE_PAIR_CLP,
            self::BASE_PAIR_CNY,
            self::BASE_PAIR_COP,
            self::BASE_PAIR_CRC,
            self::BASE_PAIR_CUC,
            self::BASE_PAIR_CUP,
            self::BASE_PAIR_CVE,
            self::BASE_PAIR_CZK,
            self::BASE_PAIR_DJF,
            self::BASE_PAIR_DKK,
            self::BASE_PAIR_DOP,
            self::BASE_PAIR_DOGE,
            self::BASE_PAIR_DZD,
            self::BASE_PAIR_EGP,
            self::BASE_PAIR_ERN,
            self::BASE_PAIR_ETB,
            self::BASE_PAIR_ETH,
            self::BASE_PAIR_EUR,
            self::BASE_PAIR_FJD,
            self::BASE_PAIR_FKP,
            self::BASE_PAIR_FLOW,
            self::BASE_PAIR_FUSD,
            self::BASE_PAIR_FREE,
            self::BASE_PAIR_GMC,
            self::BASE_PAIR_GMC_BSC,
            self::BASE_PAIR_RMD,
            self::BASE_PAIR_GBP,
            self::BASE_PAIR_GEL,
            self::BASE_PAIR_GGP,
            self::BASE_PAIR_GHS,
            self::BASE_PAIR_GIP,
            self::BASE_PAIR_GMD,
            self::BASE_PAIR_GNF,
            self::BASE_PAIR_GTQ,
            self::BASE_PAIR_GYD,
            self::BASE_PAIR_HKD,
            self::BASE_PAIR_HNL,
            self::BASE_PAIR_HRK,
            self::BASE_PAIR_HTG,
            self::BASE_PAIR_HUF,
            self::BASE_PAIR_IDR,
            self::BASE_PAIR_ILS,
            self::BASE_PAIR_IMP,
            self::BASE_PAIR_INR,
            self::BASE_PAIR_IQD,
            self::BASE_PAIR_IRR,
            self::BASE_PAIR_ISK,
            self::BASE_PAIR_JEP,
            self::BASE_PAIR_JMD,
            self::BASE_PAIR_JOD,
            self::BASE_PAIR_JPY,
            self::BASE_PAIR_KES,
            self::BASE_PAIR_KGS,
            self::BASE_PAIR_KHR,
            self::BASE_PAIR_KMF,
            self::BASE_PAIR_KPW,
            self::BASE_PAIR_KRW,
            self::BASE_PAIR_KWD,
            self::BASE_PAIR_KYD,
            self::BASE_PAIR_KZT,
            self::BASE_PAIR_LAK,
            self::BASE_PAIR_LBP,
            self::BASE_PAIR_LEO,
            self::BASE_PAIR_LINK,
            self::BASE_PAIR_LKR,
            self::BASE_PAIR_LRD,
            self::BASE_PAIR_LSL,
            self::BASE_PAIR_LTC,
            self::BASE_PAIR_LTL,
            self::BASE_PAIR_LVL,
            self::BASE_PAIR_LYD,
            self::BASE_PAIR_MAD,
            self::BASE_PAIR_MDL,
            self::BASE_PAIR_MGA,
            self::BASE_PAIR_MKD,
            self::BASE_PAIR_MKR,
            self::BASE_PAIR_MMK,
            self::BASE_PAIR_MMY,
            self::BASE_PAIR_MNT,
            self::BASE_PAIR_MOP,
            self::BASE_PAIR_MRO,
            self::BASE_PAIR_MUR,
            self::BASE_PAIR_MVR,
            self::BASE_PAIR_MWK,
            self::BASE_PAIR_MXN,
            self::BASE_PAIR_MYR,
            self::BASE_PAIR_MZN,
            self::BASE_PAIR_NAD,
            self::BASE_PAIR_NGN,
            self::BASE_PAIR_NIO,
            self::BASE_PAIR_NOK,
            self::BASE_PAIR_NPR,
            self::BASE_PAIR_NZD,
            self::BASE_PAIR_OMR,
            self::BASE_PAIR_PAB,
            self::BASE_PAIR_PAX,
            self::BASE_PAIR_PAXG,
            self::BASE_PAIR_PEN,
            self::BASE_PAIR_PGK,
            self::BASE_PAIR_PHP,
            self::BASE_PAIR_PKR,
            self::BASE_PAIR_PLN,
            self::BASE_PAIR_PYG,
            self::BASE_PAIR_QAR,
            self::BASE_PAIR_RON,
            self::BASE_PAIR_RSD,
            self::BASE_PAIR_RUB,
            self::BASE_PAIR_RWF,
            self::BASE_PAIR_SAR,
            self::BASE_PAIR_SBD,
            self::BASE_PAIR_SCR,
            self::BASE_PAIR_SDG,
            self::BASE_PAIR_SEK,
            self::BASE_PAIR_SGD,
            self::BASE_PAIR_SHP,
            self::BASE_PAIR_SLL,
            self::BASE_PAIR_SOS,
            self::BASE_PAIR_SRD,
            self::BASE_PAIR_STD,
            self::BASE_PAIR_SVC,
            self::BASE_PAIR_SYP,
            self::BASE_PAIR_SZL,
            self::BASE_PAIR_THB,
            self::BASE_PAIR_TJS,
            self::BASE_PAIR_TMT,
            self::BASE_PAIR_TND,
            self::BASE_PAIR_TOP,
            self::BASE_PAIR__TRY,
            self::BASE_PAIR_TTD,
            self::BASE_PAIR_TRON,
            self::BASE_PAIR_TUSD,
            self::BASE_PAIR_BUSD,
            self::BASE_PAIR_TWD,
            self::BASE_PAIR_TZS,
            self::BASE_PAIR_UAH,
            self::BASE_PAIR_UGX,
            self::BASE_PAIR_UNI,
            self::BASE_PAIR_USD,
            self::BASE_PAIR_USDC,
            self::BASE_PAIR_USDT,
            self::BASE_PAIR_USDT_TRON,
            self::BASE_PAIR_USDT_MATIC,
            self::BASE_PAIR_UYU,
            self::BASE_PAIR_UZS,
            self::BASE_PAIR_VEF,
            self::BASE_PAIR_VND,
            self::BASE_PAIR_VUV,
            self::BASE_PAIR_WBTC,
            self::BASE_PAIR_WST,
            self::BASE_PAIR_XAF,
            self::BASE_PAIR_XAG,
            self::BASE_PAIR_XAU,
            self::BASE_PAIR_XCD,
            self::BASE_PAIR_XCON,
            self::BASE_PAIR_XDR,
            self::BASE_PAIR_XLM,
            self::BASE_PAIR_XOF,
            self::BASE_PAIR_XPF,
            self::BASE_PAIR_XRP,
            self::BASE_PAIR_YER,
            self::BASE_PAIR_ZAR,
            self::BASE_PAIR_ZMK,
            self::BASE_PAIR_ZMW,
            self::BASE_PAIR_ZWL,
        ];
    }
    /**
     * Get allowable values
     *
     * @return scalar[]
     */
    public function getFeeCurrencyAllowableValues(): array {
        return [
            self::FEE_CURRENCY_CELO,
            self::FEE_CURRENCY_CUSD,
            self::FEE_CURRENCY_CEUR,
        ];
    }

    /**
     * Get symbol
     *
     * @return string
     */
    public function getSymbol(): string {
        return $this->_data["symbol"];
    }

    /**
     * Set symbol
     * 
     * @param string $symbol Name of the ERC20 token - stored as a symbol on Blockchain
     * @return $this
     */
    public function setSymbol(string $symbol) {
        if ((mb_strlen($symbol) > 30)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setSymbol: $symbol length must be <= 30');
        }
        if ((mb_strlen($symbol) < 1)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setSymbol: $symbol length must be >= 1');
        }
        if ((!preg_match("/^[a-zA-Z0-9_]+$/", $symbol))) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setSymbol: $symbol must match /^[a-zA-Z0-9_]+$/, ' . var_export($symbol, true) . ' given');
        }
        $this->_data['symbol'] = $symbol;

        return $this;
    }

    /**
     * Get supply
     *
     * @return string
     */
    public function getSupply(): string {
        return $this->_data["supply"];
    }

    /**
     * Set supply
     * 
     * @param string $supply max supply of ERC20 token.
     * @return $this
     */
    public function setSupply(string $supply) {
        if ((mb_strlen($supply) > 38)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setSupply: $supply length must be <= 38');
        }
        if ((!preg_match("/^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/", $supply))) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setSupply: $supply must match /^[+]?((\\d+(\\.\\d*)?)|(\\.\\d+))$/, ' . var_export($supply, true) . ' given');
        }
        $this->_data['supply'] = $supply;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->_data["description"];
    }

    /**
     * Set description
     * 
     * @param string $description Description of the ERC20 token
     * @return $this
     */
    public function setDescription(string $description) {
        if ((mb_strlen($description) > 100)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setDescription: $description length must be <= 100');
        }
        if ((mb_strlen($description) < 1)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setDescription: $description length must be >= 1');
        }
        $this->_data['description'] = $description;

        return $this;
    }

    /**
     * Get base_pair
     *
     * @return string
     */
    public function getBasePair(): string {
        return $this->_data["base_pair"];
    }

    /**
     * Set base_pair
     * 
     * @param string $base_pair Base pair for ERC20 token. 1 token will be equal to 1 unit of base pair. Transaction value will be calculated according to this base pair.
     * @return $this
     */
    public function setBasePair(string $base_pair) {
        $allowed = $this->getBasePairAllowableValues();
        if (!in_array($base_pair, $allowed, true)) {
            throw new IAE(sprintf("DeployCeloErc20OffchainPKXpub.setBasePair: base_pair invalid value '%s', must be one of '%s'", $base_pair, implode("', '", $allowed)));
        }
        if ((mb_strlen($base_pair) > 30)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setBasePair: $base_pair length must be <= 30');
        }
        if ((mb_strlen($base_pair) < 2)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setBasePair: $base_pair length must be >= 2');
        }
        $this->_data['base_pair'] = $base_pair;

        return $this;
    }

    /**
     * Get base_rate
     *
     * @return float|null
     */
    public function getBaseRate(): ?float {
        return $this->_data["base_rate"];
    }

    /**
     * Set base_rate
     * 
     * @param float|null $base_rate Exchange rate of the base pair. Each unit of the created curency will represent value of baseRate*1 basePair.
     * @return $this
     */
    public function setBaseRate(?float $base_rate) {
        if (!is_null($base_rate) && ($base_rate < 0)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setBaseRate: $base_rate must be >=0');
        }
        $this->_data['base_rate'] = $base_rate;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \Tatum\Model\CustomerRegistration|null
     */
    public function getCustomer(): ?\Tatum\Model\CustomerRegistration {
        return $this->_data["customer"];
    }

    /**
     * Set customer
     * 
     * @param \Tatum\Model\CustomerRegistration|null $customer customer
     * @return $this
     */
    public function setCustomer(?\Tatum\Model\CustomerRegistration $customer) {
        $this->_data['customer'] = $customer;

        return $this;
    }

    /**
     * Get xpub
     *
     * @return string
     */
    public function getXpub(): string {
        return $this->_data["xpub"];
    }

    /**
     * Set xpub
     * 
     * @param string $xpub Extended public key (xpub), from which address, where all initial supply will be stored, will be generated. Either xpub and derivationIndex, or address must be present, not both.
     * @return $this
     */
    public function setXpub(string $xpub) {
        if ((mb_strlen($xpub) > 150)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setXpub: $xpub length must be <= 150');
        }
        if ((mb_strlen($xpub) < 1)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setXpub: $xpub length must be >= 1');
        }
        $this->_data['xpub'] = $xpub;

        return $this;
    }

    /**
     * Get derivation_index
     *
     * @return int
     */
    public function getDerivationIndex(): int {
        return $this->_data["derivation_index"];
    }

    /**
     * Set derivation_index
     * 
     * @param int $derivation_index Derivation index for xpub to generate specific deposit address.
     * @return $this
     */
    public function setDerivationIndex(int $derivation_index) {
        if (($derivation_index > 2147483647)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setDerivationIndex: $derivation_index must be <=2147483647');
        }
        $this->_data['derivation_index'] = $derivation_index;

        return $this;
    }

    /**
     * Get private_key
     *
     * @return string
     */
    public function getPrivateKey(): string {
        return $this->_data["private_key"];
    }

    /**
     * Set private_key
     * 
     * @param string $private_key Private key of Ethereum account address, from which gas for deployment of ERC20 will be paid. Private key, mnemonic or signature Id must be present.
     * @return $this
     */
    public function setPrivateKey(string $private_key) {
        if ((mb_strlen($private_key) > 66)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setPrivateKey: $private_key length must be <= 66');
        }
        if ((mb_strlen($private_key) < 66)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setPrivateKey: $private_key length must be >= 66');
        }
        $this->_data['private_key'] = $private_key;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return float|null
     */
    public function getNonce(): ?float {
        return $this->_data["nonce"];
    }

    /**
     * Set nonce
     * 
     * @param float|null $nonce The nonce to be set to the transaction; if not present, the last known nonce will be used
     * @return $this
     */
    public function setNonce(?float $nonce) {
        if (!is_null($nonce) && ($nonce < 0)) {
            throw new IAE('DeployCeloErc20OffchainPKXpub.setNonce: $nonce must be >=0');
        }
        $this->_data['nonce'] = $nonce;

        return $this;
    }

    /**
     * Get fee_currency
     *
     * @return string
     */
    public function getFeeCurrency(): string {
        return $this->_data["fee_currency"];
    }

    /**
     * Set fee_currency
     * 
     * @param string $fee_currency The currency in which the transaction fee will be paid
     * @return $this
     */
    public function setFeeCurrency(string $fee_currency) {
        $allowed = $this->getFeeCurrencyAllowableValues();
        if (!in_array($fee_currency, $allowed, true)) {
            throw new IAE(sprintf("DeployCeloErc20OffchainPKXpub.setFeeCurrency: fee_currency invalid value '%s', must be one of '%s'", $fee_currency, implode("', '", $allowed)));
        }
        $this->_data['fee_currency'] = $fee_currency;

        return $this;
    }
}
