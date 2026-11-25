<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ShippingRate\CurrencyOption;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
    case Unspecified = 'unspecified';
}
