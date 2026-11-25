<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccountRequest20Variant1;

enum BankAccountRequest20Variant1NetworkEnum: string
{
    case Ach = 'ach';
    case UsDomesticWire = 'us_domestic_wire';
}
