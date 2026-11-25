<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ShippingOptionsRequestVariant1Item\ShippingRateData;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
    case Unspecified = 'unspecified';
}
