<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\ResourceCustomerDetails;

enum AddressSourceEnum: string
{
    case Billing = 'billing';
    case Shipping = 'shipping';
}
