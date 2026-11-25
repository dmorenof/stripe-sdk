<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionItems\ByItem\Post\PriceData\Recurring;

enum RecurringIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
