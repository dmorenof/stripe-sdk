<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BillingSchedulesRequestVariant1Item\BillUntil\Duration;

enum DurationIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
