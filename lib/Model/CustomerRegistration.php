<?php

/**
 * CustomerRegistration Model
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
!defined("TATUM-SDK") && exit();

/**
 * CustomerRegistration Model
 * 
 * @description If a customer with the specified external ID does not exist, a new customer is created. If a customer with the specified external ID exists, it is updated with the provided information.
 */
class CustomerRegistration extends AbstractModel {

    public const _D = null;
    public const ACCOUNTING_CURRENCY_AED = 'AED';
    public const ACCOUNTING_CURRENCY_AFN = 'AFN';
    public const ACCOUNTING_CURRENCY_ALL = 'ALL';
    public const ACCOUNTING_CURRENCY_AMD = 'AMD';
    public const ACCOUNTING_CURRENCY_ANG = 'ANG';
    public const ACCOUNTING_CURRENCY_AOA = 'AOA';
    public const ACCOUNTING_CURRENCY_ARS = 'ARS';
    public const ACCOUNTING_CURRENCY_AUD = 'AUD';
    public const ACCOUNTING_CURRENCY_AWG = 'AWG';
    public const ACCOUNTING_CURRENCY_AZN = 'AZN';
    public const ACCOUNTING_CURRENCY_BAM = 'BAM';
    public const ACCOUNTING_CURRENCY_BBD = 'BBD';
    public const ACCOUNTING_CURRENCY_BDT = 'BDT';
    public const ACCOUNTING_CURRENCY_BGN = 'BGN';
    public const ACCOUNTING_CURRENCY_BHD = 'BHD';
    public const ACCOUNTING_CURRENCY_BIF = 'BIF';
    public const ACCOUNTING_CURRENCY_BMD = 'BMD';
    public const ACCOUNTING_CURRENCY_BND = 'BND';
    public const ACCOUNTING_CURRENCY_BOB = 'BOB';
    public const ACCOUNTING_CURRENCY_BRL = 'BRL';
    public const ACCOUNTING_CURRENCY_BSD = 'BSD';
    public const ACCOUNTING_CURRENCY_BTN = 'BTN';
    public const ACCOUNTING_CURRENCY_BWP = 'BWP';
    public const ACCOUNTING_CURRENCY_BYN = 'BYN';
    public const ACCOUNTING_CURRENCY_BYR = 'BYR';
    public const ACCOUNTING_CURRENCY_BZD = 'BZD';
    public const ACCOUNTING_CURRENCY_CAD = 'CAD';
    public const ACCOUNTING_CURRENCY_CDF = 'CDF';
    public const ACCOUNTING_CURRENCY_CHF = 'CHF';
    public const ACCOUNTING_CURRENCY_CLF = 'CLF';
    public const ACCOUNTING_CURRENCY_CLP = 'CLP';
    public const ACCOUNTING_CURRENCY_CNY = 'CNY';
    public const ACCOUNTING_CURRENCY_COP = 'COP';
    public const ACCOUNTING_CURRENCY_CRC = 'CRC';
    public const ACCOUNTING_CURRENCY_CUC = 'CUC';
    public const ACCOUNTING_CURRENCY_CUP = 'CUP';
    public const ACCOUNTING_CURRENCY_CVE = 'CVE';
    public const ACCOUNTING_CURRENCY_CZK = 'CZK';
    public const ACCOUNTING_CURRENCY_DJF = 'DJF';
    public const ACCOUNTING_CURRENCY_DKK = 'DKK';
    public const ACCOUNTING_CURRENCY_DOP = 'DOP';
    public const ACCOUNTING_CURRENCY_DOGE = 'DOGE';
    public const ACCOUNTING_CURRENCY_DZD = 'DZD';
    public const ACCOUNTING_CURRENCY_EGP = 'EGP';
    public const ACCOUNTING_CURRENCY_ERN = 'ERN';
    public const ACCOUNTING_CURRENCY_ETB = 'ETB';
    public const ACCOUNTING_CURRENCY_EUR = 'EUR';
    public const ACCOUNTING_CURRENCY_FJD = 'FJD';
    public const ACCOUNTING_CURRENCY_FKP = 'FKP';
    public const ACCOUNTING_CURRENCY_FLOW = 'FLOW';
    public const ACCOUNTING_CURRENCY_FUSD = 'FUSD';
    public const ACCOUNTING_CURRENCY_GBP = 'GBP';
    public const ACCOUNTING_CURRENCY_GEL = 'GEL';
    public const ACCOUNTING_CURRENCY_GGP = 'GGP';
    public const ACCOUNTING_CURRENCY_GHS = 'GHS';
    public const ACCOUNTING_CURRENCY_GIP = 'GIP';
    public const ACCOUNTING_CURRENCY_GMD = 'GMD';
    public const ACCOUNTING_CURRENCY_GNF = 'GNF';
    public const ACCOUNTING_CURRENCY_GTQ = 'GTQ';
    public const ACCOUNTING_CURRENCY_GYD = 'GYD';
    public const ACCOUNTING_CURRENCY_HKD = 'HKD';
    public const ACCOUNTING_CURRENCY_HNL = 'HNL';
    public const ACCOUNTING_CURRENCY_HRK = 'HRK';
    public const ACCOUNTING_CURRENCY_HTG = 'HTG';
    public const ACCOUNTING_CURRENCY_HUF = 'HUF';
    public const ACCOUNTING_CURRENCY_IDR = 'IDR';
    public const ACCOUNTING_CURRENCY_ILS = 'ILS';
    public const ACCOUNTING_CURRENCY_IMP = 'IMP';
    public const ACCOUNTING_CURRENCY_INR = 'INR';
    public const ACCOUNTING_CURRENCY_IQD = 'IQD';
    public const ACCOUNTING_CURRENCY_IRR = 'IRR';
    public const ACCOUNTING_CURRENCY_ISK = 'ISK';
    public const ACCOUNTING_CURRENCY_JEP = 'JEP';
    public const ACCOUNTING_CURRENCY_JMD = 'JMD';
    public const ACCOUNTING_CURRENCY_JOD = 'JOD';
    public const ACCOUNTING_CURRENCY_JPY = 'JPY';
    public const ACCOUNTING_CURRENCY_KES = 'KES';
    public const ACCOUNTING_CURRENCY_KGS = 'KGS';
    public const ACCOUNTING_CURRENCY_KHR = 'KHR';
    public const ACCOUNTING_CURRENCY_KMF = 'KMF';
    public const ACCOUNTING_CURRENCY_KPW = 'KPW';
    public const ACCOUNTING_CURRENCY_KRW = 'KRW';
    public const ACCOUNTING_CURRENCY_KWD = 'KWD';
    public const ACCOUNTING_CURRENCY_KYD = 'KYD';
    public const ACCOUNTING_CURRENCY_KZT = 'KZT';
    public const ACCOUNTING_CURRENCY_LAK = 'LAK';
    public const ACCOUNTING_CURRENCY_LBP = 'LBP';
    public const ACCOUNTING_CURRENCY_LKR = 'LKR';
    public const ACCOUNTING_CURRENCY_LRD = 'LRD';
    public const ACCOUNTING_CURRENCY_LSL = 'LSL';
    public const ACCOUNTING_CURRENCY_LTL = 'LTL';
    public const ACCOUNTING_CURRENCY_LVL = 'LVL';
    public const ACCOUNTING_CURRENCY_LYD = 'LYD';
    public const ACCOUNTING_CURRENCY_MAD = 'MAD';
    public const ACCOUNTING_CURRENCY_MDL = 'MDL';
    public const ACCOUNTING_CURRENCY_MGA = 'MGA';
    public const ACCOUNTING_CURRENCY_MKD = 'MKD';
    public const ACCOUNTING_CURRENCY_MMK = 'MMK';
    public const ACCOUNTING_CURRENCY_MNT = 'MNT';
    public const ACCOUNTING_CURRENCY_MOP = 'MOP';
    public const ACCOUNTING_CURRENCY_MRO = 'MRO';
    public const ACCOUNTING_CURRENCY_MUR = 'MUR';
    public const ACCOUNTING_CURRENCY_MVR = 'MVR';
    public const ACCOUNTING_CURRENCY_MWK = 'MWK';
    public const ACCOUNTING_CURRENCY_MXN = 'MXN';
    public const ACCOUNTING_CURRENCY_MYR = 'MYR';
    public const ACCOUNTING_CURRENCY_MZN = 'MZN';
    public const ACCOUNTING_CURRENCY_NAD = 'NAD';
    public const ACCOUNTING_CURRENCY_NGN = 'NGN';
    public const ACCOUNTING_CURRENCY_NIO = 'NIO';
    public const ACCOUNTING_CURRENCY_NOK = 'NOK';
    public const ACCOUNTING_CURRENCY_NPR = 'NPR';
    public const ACCOUNTING_CURRENCY_NZD = 'NZD';
    public const ACCOUNTING_CURRENCY_OMR = 'OMR';
    public const ACCOUNTING_CURRENCY_PAB = 'PAB';
    public const ACCOUNTING_CURRENCY_PEN = 'PEN';
    public const ACCOUNTING_CURRENCY_PGK = 'PGK';
    public const ACCOUNTING_CURRENCY_PHP = 'PHP';
    public const ACCOUNTING_CURRENCY_PKR = 'PKR';
    public const ACCOUNTING_CURRENCY_PLN = 'PLN';
    public const ACCOUNTING_CURRENCY_PYG = 'PYG';
    public const ACCOUNTING_CURRENCY_QAR = 'QAR';
    public const ACCOUNTING_CURRENCY_RON = 'RON';
    public const ACCOUNTING_CURRENCY_RSD = 'RSD';
    public const ACCOUNTING_CURRENCY_RUB = 'RUB';
    public const ACCOUNTING_CURRENCY_RWF = 'RWF';
    public const ACCOUNTING_CURRENCY_SAR = 'SAR';
    public const ACCOUNTING_CURRENCY_SBD = 'SBD';
    public const ACCOUNTING_CURRENCY_SCR = 'SCR';
    public const ACCOUNTING_CURRENCY_SDG = 'SDG';
    public const ACCOUNTING_CURRENCY_SEK = 'SEK';
    public const ACCOUNTING_CURRENCY_SGD = 'SGD';
    public const ACCOUNTING_CURRENCY_SHP = 'SHP';
    public const ACCOUNTING_CURRENCY_SLL = 'SLL';
    public const ACCOUNTING_CURRENCY_SOS = 'SOS';
    public const ACCOUNTING_CURRENCY_SRD = 'SRD';
    public const ACCOUNTING_CURRENCY_STD = 'STD';
    public const ACCOUNTING_CURRENCY_SVC = 'SVC';
    public const ACCOUNTING_CURRENCY_SYP = 'SYP';
    public const ACCOUNTING_CURRENCY_SZL = 'SZL';
    public const ACCOUNTING_CURRENCY_THB = 'THB';
    public const ACCOUNTING_CURRENCY_TJS = 'TJS';
    public const ACCOUNTING_CURRENCY_TMT = 'TMT';
    public const ACCOUNTING_CURRENCY_TND = 'TND';
    public const ACCOUNTING_CURRENCY_TOP = 'TOP';
    public const ACCOUNTING_CURRENCY__TRY = 'TRY';
    public const ACCOUNTING_CURRENCY_TTD = 'TTD';
    public const ACCOUNTING_CURRENCY_TWD = 'TWD';
    public const ACCOUNTING_CURRENCY_TZS = 'TZS';
    public const ACCOUNTING_CURRENCY_UAH = 'UAH';
    public const ACCOUNTING_CURRENCY_UGX = 'UGX';
    public const ACCOUNTING_CURRENCY_USD = 'USD';
    public const ACCOUNTING_CURRENCY_UYU = 'UYU';
    public const ACCOUNTING_CURRENCY_UZS = 'UZS';
    public const ACCOUNTING_CURRENCY_VEF = 'VEF';
    public const ACCOUNTING_CURRENCY_VND = 'VND';
    public const ACCOUNTING_CURRENCY_VUV = 'VUV';
    public const ACCOUNTING_CURRENCY_WST = 'WST';
    public const ACCOUNTING_CURRENCY_XAF = 'XAF';
    public const ACCOUNTING_CURRENCY_XAG = 'XAG';
    public const ACCOUNTING_CURRENCY_XAU = 'XAU';
    public const ACCOUNTING_CURRENCY_XCD = 'XCD';
    public const ACCOUNTING_CURRENCY_XDR = 'XDR';
    public const ACCOUNTING_CURRENCY_XOF = 'XOF';
    public const ACCOUNTING_CURRENCY_XPF = 'XPF';
    public const ACCOUNTING_CURRENCY_YER = 'YER';
    public const ACCOUNTING_CURRENCY_ZAR = 'ZAR';
    public const ACCOUNTING_CURRENCY_ZMK = 'ZMK';
    public const ACCOUNTING_CURRENCY_ZMW = 'ZMW';
    public const ACCOUNTING_CURRENCY_ZWL = 'ZWL';
    protected static $_name = "CustomerRegistration";
    protected static $_definition = [
        "accounting_currency" => ["accountingCurrency", "string", null, "getAccountingCurrency", "setAccountingCurrency", 'EUR', ["r" => 0, "e" => 1, "nl" => 3, "xl" => 3]], 
        "customer_country" => ["customerCountry", "string", null, "getCustomerCountry", "setCustomerCountry", null, ["r" => 0, "nl" => 2, "xl" => 2]], 
        "external_id" => ["externalId", "string", null, "getExternalId", "setExternalId", null, ["r" => 1, "nl" => 1, "xl" => 100]], 
        "provider_country" => ["providerCountry", "string", null, "getProviderCountry", "setProviderCountry", null, ["r" => 0, "nl" => 2, "xl" => 2]]
    ];

    /**
     * CustomerRegistration
     *
     * @param mixed[] $data Model data
     */
    public function __construct(array $data = []) {
        foreach(static::$_definition as $k => $v) {
            $this->_data[$k] = isset($data[$k]) ? $data[$k] : $v[5];
        }
    }

    /**
     * Get allowable values
     *
     * @return string[]
     */
    public function getAccountingCurrencyAllowableValues(): array {
        return [
            self::ACCOUNTING_CURRENCY_AED,
            self::ACCOUNTING_CURRENCY_AFN,
            self::ACCOUNTING_CURRENCY_ALL,
            self::ACCOUNTING_CURRENCY_AMD,
            self::ACCOUNTING_CURRENCY_ANG,
            self::ACCOUNTING_CURRENCY_AOA,
            self::ACCOUNTING_CURRENCY_ARS,
            self::ACCOUNTING_CURRENCY_AUD,
            self::ACCOUNTING_CURRENCY_AWG,
            self::ACCOUNTING_CURRENCY_AZN,
            self::ACCOUNTING_CURRENCY_BAM,
            self::ACCOUNTING_CURRENCY_BBD,
            self::ACCOUNTING_CURRENCY_BDT,
            self::ACCOUNTING_CURRENCY_BGN,
            self::ACCOUNTING_CURRENCY_BHD,
            self::ACCOUNTING_CURRENCY_BIF,
            self::ACCOUNTING_CURRENCY_BMD,
            self::ACCOUNTING_CURRENCY_BND,
            self::ACCOUNTING_CURRENCY_BOB,
            self::ACCOUNTING_CURRENCY_BRL,
            self::ACCOUNTING_CURRENCY_BSD,
            self::ACCOUNTING_CURRENCY_BTN,
            self::ACCOUNTING_CURRENCY_BWP,
            self::ACCOUNTING_CURRENCY_BYN,
            self::ACCOUNTING_CURRENCY_BYR,
            self::ACCOUNTING_CURRENCY_BZD,
            self::ACCOUNTING_CURRENCY_CAD,
            self::ACCOUNTING_CURRENCY_CDF,
            self::ACCOUNTING_CURRENCY_CHF,
            self::ACCOUNTING_CURRENCY_CLF,
            self::ACCOUNTING_CURRENCY_CLP,
            self::ACCOUNTING_CURRENCY_CNY,
            self::ACCOUNTING_CURRENCY_COP,
            self::ACCOUNTING_CURRENCY_CRC,
            self::ACCOUNTING_CURRENCY_CUC,
            self::ACCOUNTING_CURRENCY_CUP,
            self::ACCOUNTING_CURRENCY_CVE,
            self::ACCOUNTING_CURRENCY_CZK,
            self::ACCOUNTING_CURRENCY_DJF,
            self::ACCOUNTING_CURRENCY_DKK,
            self::ACCOUNTING_CURRENCY_DOP,
            self::ACCOUNTING_CURRENCY_DOGE,
            self::ACCOUNTING_CURRENCY_DZD,
            self::ACCOUNTING_CURRENCY_EGP,
            self::ACCOUNTING_CURRENCY_ERN,
            self::ACCOUNTING_CURRENCY_ETB,
            self::ACCOUNTING_CURRENCY_EUR,
            self::ACCOUNTING_CURRENCY_FJD,
            self::ACCOUNTING_CURRENCY_FKP,
            self::ACCOUNTING_CURRENCY_FLOW,
            self::ACCOUNTING_CURRENCY_FUSD,
            self::ACCOUNTING_CURRENCY_GBP,
            self::ACCOUNTING_CURRENCY_GEL,
            self::ACCOUNTING_CURRENCY_GGP,
            self::ACCOUNTING_CURRENCY_GHS,
            self::ACCOUNTING_CURRENCY_GIP,
            self::ACCOUNTING_CURRENCY_GMD,
            self::ACCOUNTING_CURRENCY_GNF,
            self::ACCOUNTING_CURRENCY_GTQ,
            self::ACCOUNTING_CURRENCY_GYD,
            self::ACCOUNTING_CURRENCY_HKD,
            self::ACCOUNTING_CURRENCY_HNL,
            self::ACCOUNTING_CURRENCY_HRK,
            self::ACCOUNTING_CURRENCY_HTG,
            self::ACCOUNTING_CURRENCY_HUF,
            self::ACCOUNTING_CURRENCY_IDR,
            self::ACCOUNTING_CURRENCY_ILS,
            self::ACCOUNTING_CURRENCY_IMP,
            self::ACCOUNTING_CURRENCY_INR,
            self::ACCOUNTING_CURRENCY_IQD,
            self::ACCOUNTING_CURRENCY_IRR,
            self::ACCOUNTING_CURRENCY_ISK,
            self::ACCOUNTING_CURRENCY_JEP,
            self::ACCOUNTING_CURRENCY_JMD,
            self::ACCOUNTING_CURRENCY_JOD,
            self::ACCOUNTING_CURRENCY_JPY,
            self::ACCOUNTING_CURRENCY_KES,
            self::ACCOUNTING_CURRENCY_KGS,
            self::ACCOUNTING_CURRENCY_KHR,
            self::ACCOUNTING_CURRENCY_KMF,
            self::ACCOUNTING_CURRENCY_KPW,
            self::ACCOUNTING_CURRENCY_KRW,
            self::ACCOUNTING_CURRENCY_KWD,
            self::ACCOUNTING_CURRENCY_KYD,
            self::ACCOUNTING_CURRENCY_KZT,
            self::ACCOUNTING_CURRENCY_LAK,
            self::ACCOUNTING_CURRENCY_LBP,
            self::ACCOUNTING_CURRENCY_LKR,
            self::ACCOUNTING_CURRENCY_LRD,
            self::ACCOUNTING_CURRENCY_LSL,
            self::ACCOUNTING_CURRENCY_LTL,
            self::ACCOUNTING_CURRENCY_LVL,
            self::ACCOUNTING_CURRENCY_LYD,
            self::ACCOUNTING_CURRENCY_MAD,
            self::ACCOUNTING_CURRENCY_MDL,
            self::ACCOUNTING_CURRENCY_MGA,
            self::ACCOUNTING_CURRENCY_MKD,
            self::ACCOUNTING_CURRENCY_MMK,
            self::ACCOUNTING_CURRENCY_MNT,
            self::ACCOUNTING_CURRENCY_MOP,
            self::ACCOUNTING_CURRENCY_MRO,
            self::ACCOUNTING_CURRENCY_MUR,
            self::ACCOUNTING_CURRENCY_MVR,
            self::ACCOUNTING_CURRENCY_MWK,
            self::ACCOUNTING_CURRENCY_MXN,
            self::ACCOUNTING_CURRENCY_MYR,
            self::ACCOUNTING_CURRENCY_MZN,
            self::ACCOUNTING_CURRENCY_NAD,
            self::ACCOUNTING_CURRENCY_NGN,
            self::ACCOUNTING_CURRENCY_NIO,
            self::ACCOUNTING_CURRENCY_NOK,
            self::ACCOUNTING_CURRENCY_NPR,
            self::ACCOUNTING_CURRENCY_NZD,
            self::ACCOUNTING_CURRENCY_OMR,
            self::ACCOUNTING_CURRENCY_PAB,
            self::ACCOUNTING_CURRENCY_PEN,
            self::ACCOUNTING_CURRENCY_PGK,
            self::ACCOUNTING_CURRENCY_PHP,
            self::ACCOUNTING_CURRENCY_PKR,
            self::ACCOUNTING_CURRENCY_PLN,
            self::ACCOUNTING_CURRENCY_PYG,
            self::ACCOUNTING_CURRENCY_QAR,
            self::ACCOUNTING_CURRENCY_RON,
            self::ACCOUNTING_CURRENCY_RSD,
            self::ACCOUNTING_CURRENCY_RUB,
            self::ACCOUNTING_CURRENCY_RWF,
            self::ACCOUNTING_CURRENCY_SAR,
            self::ACCOUNTING_CURRENCY_SBD,
            self::ACCOUNTING_CURRENCY_SCR,
            self::ACCOUNTING_CURRENCY_SDG,
            self::ACCOUNTING_CURRENCY_SEK,
            self::ACCOUNTING_CURRENCY_SGD,
            self::ACCOUNTING_CURRENCY_SHP,
            self::ACCOUNTING_CURRENCY_SLL,
            self::ACCOUNTING_CURRENCY_SOS,
            self::ACCOUNTING_CURRENCY_SRD,
            self::ACCOUNTING_CURRENCY_STD,
            self::ACCOUNTING_CURRENCY_SVC,
            self::ACCOUNTING_CURRENCY_SYP,
            self::ACCOUNTING_CURRENCY_SZL,
            self::ACCOUNTING_CURRENCY_THB,
            self::ACCOUNTING_CURRENCY_TJS,
            self::ACCOUNTING_CURRENCY_TMT,
            self::ACCOUNTING_CURRENCY_TND,
            self::ACCOUNTING_CURRENCY_TOP,
            self::ACCOUNTING_CURRENCY__TRY,
            self::ACCOUNTING_CURRENCY_TTD,
            self::ACCOUNTING_CURRENCY_TWD,
            self::ACCOUNTING_CURRENCY_TZS,
            self::ACCOUNTING_CURRENCY_UAH,
            self::ACCOUNTING_CURRENCY_UGX,
            self::ACCOUNTING_CURRENCY_USD,
            self::ACCOUNTING_CURRENCY_UYU,
            self::ACCOUNTING_CURRENCY_UZS,
            self::ACCOUNTING_CURRENCY_VEF,
            self::ACCOUNTING_CURRENCY_VND,
            self::ACCOUNTING_CURRENCY_VUV,
            self::ACCOUNTING_CURRENCY_WST,
            self::ACCOUNTING_CURRENCY_XAF,
            self::ACCOUNTING_CURRENCY_XAG,
            self::ACCOUNTING_CURRENCY_XAU,
            self::ACCOUNTING_CURRENCY_XCD,
            self::ACCOUNTING_CURRENCY_XDR,
            self::ACCOUNTING_CURRENCY_XOF,
            self::ACCOUNTING_CURRENCY_XPF,
            self::ACCOUNTING_CURRENCY_YER,
            self::ACCOUNTING_CURRENCY_ZAR,
            self::ACCOUNTING_CURRENCY_ZMK,
            self::ACCOUNTING_CURRENCY_ZMW,
            self::ACCOUNTING_CURRENCY_ZWL,
        ];
    }

    /**
     * Get accounting_currency
     *
     * @return string|null
     */
    public function getAccountingCurrency(): ?string {
        return $this->_data["accounting_currency"];
    }

    /**
     * Set accounting_currency
     * 
     * @param string|null $accounting_currency The ISO 4217 code of the currency in which all transactions for all virtual accounts of the customer will be billed; to overwrite the currency for this specific virtual account, set the <code>accountingCurrency</code> parameter at the account level.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setAccountingCurrency(?string $accounting_currency) {
        return $this->_set("accounting_currency", $accounting_currency);
    }

    /**
     * Get customer_country
     *
     * @return string|null
     */
    public function getCustomerCountry(): ?string {
        return $this->_data["customer_country"];
    }

    /**
     * Set customer_country
     * 
     * @param string|null $customer_country The ISO 3166-1 code of the country that the customer has to be compliant with
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setCustomerCountry(?string $customer_country) {
        return $this->_set("customer_country", $customer_country);
    }

    /**
     * Get external_id
     *
     * @return string
     */
    public function getExternalId(): string {
        return $this->_data["external_id"];
    }

    /**
     * Set external_id
     * 
     * @param string $external_id The external ID of the customer; use only anonymized identification that you have in your system<br/>If a customer with the specified external ID does not exist, a new customer is created. If a customer with the specified external ID exists, it is updated with the provided information.
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setExternalId(string $external_id) {
        return $this->_set("external_id", $external_id);
    }

    /**
     * Get provider_country
     *
     * @return string|null
     */
    public function getProviderCountry(): ?string {
        return $this->_data["provider_country"];
    }

    /**
     * Set provider_country
     * 
     * @param string|null $provider_country The ISO 3166-1 code of the country that the service provider has to be compliant with
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setProviderCountry(?string $provider_country) {
        return $this->_set("provider_country", $provider_country);
    }
}
