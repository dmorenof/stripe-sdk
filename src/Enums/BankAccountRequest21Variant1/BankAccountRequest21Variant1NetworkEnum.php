<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccountRequest21Variant1;

enum BankAccountRequest21Variant1NetworkEnum: string
{
    case Ach = 'ach';
    case UsDomesticWire = 'us_domestic_wire';
}
