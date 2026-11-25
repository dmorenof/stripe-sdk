<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccountRequest17Variant1\Networks;

enum NetworksRequestedEnum: string
{
    case Ach = 'ach';
    case UsDomesticWire = 'us_domestic_wire';
}
