<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\ByAccount\Post\Settings\Payouts\Schedule;

enum WeeklyAnchorEnum: string
{
    case Friday = 'friday';
    case Monday = 'monday';
    case Saturday = 'saturday';
    case Sunday = 'sunday';
    case Thursday = 'thursday';
    case Tuesday = 'tuesday';
    case Wednesday = 'wednesday';
}
