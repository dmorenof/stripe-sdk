<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Tax\CalculationLineItem;

enum TaxBehaviorEnum: string
{
    case Exclusive = 'exclusive';
    case Inclusive = 'inclusive';
}
