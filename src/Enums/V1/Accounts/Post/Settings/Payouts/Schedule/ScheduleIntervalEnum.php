<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\Post\Settings\Payouts\Schedule;

enum ScheduleIntervalEnum: string
{
    case Daily = 'daily';
    case Manual = 'manual';
    case Monthly = 'monthly';
    case Weekly = 'weekly';
}
