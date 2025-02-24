<?php

declare(strict_types=1);

namespace BitWasp\Bitcoin\Address;

use BitWasp\Bitcoin\Network\NetworkInterface;

interface Base58AddressInterface extends AddressInterface
{
    /**
     * @param NetworkInterface|null $network
     * @return string
     */
    public function getPrefixByte(?NetworkInterface $network = null): string;
}
