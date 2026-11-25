<?php

declare(strict_types=1);

namespace StripeSDK\Enums\CancelAtRequestVariant2;

enum AtVariant2Enum: string
{
    case MaxBilledUntil = 'max_billed_until';
    case MaxPeriodEnd = 'max_period_end';
    case MinPeriodEnd = 'min_period_end';
}
