<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\BySchedule\Post\PhasesItem\Duration;

enum DurationIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
