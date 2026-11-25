<?php

declare(strict_types=1);

namespace StripeSDK\Enums;

enum BlockedVariant1Enum: string
{
    case AmericanExpress = 'american_express';
    case DiscoverGlobalNetwork = 'discover_global_network';
    case Mastercard = 'mastercard';
    case Visa = 'visa';
}
