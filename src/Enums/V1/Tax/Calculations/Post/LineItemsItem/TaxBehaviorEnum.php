<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Tax\Calculations\Post\LineItemsItem;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
}
