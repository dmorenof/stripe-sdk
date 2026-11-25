<?php

declare(strict_types=1);

namespace StripeSDK\Enums\QuotesResource\Recurring;

enum IntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
