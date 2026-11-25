<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Outbound\PaymentsPaymentMethodDetailsUsBankAccount;

enum NetworkEnum: string
{
    case Ach = 'ach';
    case UsDomesticWire = 'us_domestic_wire';
}
