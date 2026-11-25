<?php

declare(strict_types=1);

namespace StripeSDK\Enums\KlarnaSubscriptionsRequestVariant1Item;

enum KlarnaSubscriptionsRequestVariant1ItemIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
