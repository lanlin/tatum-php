<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Address;
!defined("TATUM-SDK") && exit();

use Tatum\Cryptography\Network\NetworkInterface;

interface Bech32AddressInterface extends AddressInterface {
    /**
     * @param  \Tatum\Cryptography\Network\NetworkInterface|null  $network
     *
     * @return string
     */
    public function getHRP(NetworkInterface $network = null): string;
}
