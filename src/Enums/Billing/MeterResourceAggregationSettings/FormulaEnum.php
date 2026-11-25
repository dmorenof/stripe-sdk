<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\MeterResourceAggregationSettings;

enum FormulaEnum: string
{
    case Count = 'count';
    case Last = 'last';
    case Sum = 'sum';
}
