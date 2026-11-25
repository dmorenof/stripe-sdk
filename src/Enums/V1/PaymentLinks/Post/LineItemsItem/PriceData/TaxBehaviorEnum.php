<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\Post\LineItemsItem\PriceData;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
    case Unspecified = 'unspecified';
}
