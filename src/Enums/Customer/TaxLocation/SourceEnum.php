<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Customer\TaxLocation;

enum SourceEnum: string
{
    case BillingAddress = 'billing_address';
    case IpAddress = 'ip_address';
    case PaymentMethod = 'payment_method';
    case ShippingDestination = 'shipping_destination';
}
