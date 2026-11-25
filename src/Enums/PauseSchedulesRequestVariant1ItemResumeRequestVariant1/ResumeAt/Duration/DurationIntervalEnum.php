<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\ResumeAt\Duration;

enum DurationIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
