<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionItems\Post\PriceData;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
    case Unspecified = 'unspecified';
}
