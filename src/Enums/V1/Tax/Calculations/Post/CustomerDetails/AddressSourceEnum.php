<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Tax\Calculations\Post\CustomerDetails;

enum AddressSourceEnum: string
{
    case Billing = 'billing';
    case Shipping = 'shipping';
}
