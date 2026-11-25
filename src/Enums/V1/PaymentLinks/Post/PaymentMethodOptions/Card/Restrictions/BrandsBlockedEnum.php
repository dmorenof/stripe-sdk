<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\Post\PaymentMethodOptions\Card\Restrictions;

enum BrandsBlockedEnum: string
{
    case AmericanExpress = 'american_express';
    case DiscoverGlobalNetwork = 'discover_global_network';
    case Mastercard = 'mastercard';
    case Visa = 'visa';
}
