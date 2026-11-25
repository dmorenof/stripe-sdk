<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ShippingCostRequestVariant1\ShippingRateData\FixedAmount\CurrencyOptionsValue;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
    case Unspecified = 'unspecified';
}
