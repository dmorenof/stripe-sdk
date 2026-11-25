<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Billing\Meters\Post\DefaultAggregation;

enum AggregationFormulaEnum: string
{
    case Count = 'count';
    case Last = 'last';
    case Sum = 'sum';
}
