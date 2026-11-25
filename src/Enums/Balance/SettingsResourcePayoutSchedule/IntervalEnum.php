<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Balance\SettingsResourcePayoutSchedule;

enum IntervalEnum: string
{
    case Daily = 'daily';
    case Manual = 'manual';
    case Monthly = 'monthly';
    case Weekly = 'weekly';
}
