<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BillingSchedulesRequest2Variant1Item\BillUntil\Duration;

enum DurationIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
