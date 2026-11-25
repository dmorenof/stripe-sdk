<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\Post\BillingSchedulesItem\BillUntil\Duration;

enum DurationIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
