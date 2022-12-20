<?php

/**
 * getSubscriptionReport_200_response Model
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
 * getSubscriptionReport_200_response Model
 */
class GetSubscriptionReport200Response extends AbstractModel {

    public const DISCRIMINATOR = null;
    protected static $_name = "getSubscriptionReport_200_response";
    protected static $_definition = [
    ];

    /**
     * GetSubscriptionReport200Response
     */
    public function __construct() {
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array {
        $ip = [];

        
        return $ip;
    }
}
