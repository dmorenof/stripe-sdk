<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\Meter;

enum TimeWindowEnum: string
{
    case Day = 'day';
    case Hour = 'hour';
}
