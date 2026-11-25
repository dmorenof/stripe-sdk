<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Price;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
    case Unspecified = 'unspecified';
}
