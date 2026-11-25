<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\Networks;

enum NetworksRequestedEnum: string
{
    case Ach = 'ach';
    case UsDomesticWire = 'us_domestic_wire';
}
