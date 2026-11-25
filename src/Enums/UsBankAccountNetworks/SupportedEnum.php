<?php

declare(strict_types=1);

namespace StripeSDK\Enums\UsBankAccountNetworks;

enum SupportedEnum: string
{
    case Ach = 'ach';
    case UsDomesticWire = 'us_domestic_wire';
}
