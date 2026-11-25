<?php

declare(strict_types=1);

namespace StripeSDK\Enums\CurrencyOptionsRequestVariant1Value;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
    case Unspecified = 'unspecified';
}
