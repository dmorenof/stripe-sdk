<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Balance\SettingsResourcePayoutSchedule;

enum PayoutDaysEnum: string
{
    case Friday = 'friday';
    case Monday = 'monday';
    case Thursday = 'thursday';
    case Tuesday = 'tuesday';
    case Wednesday = 'wednesday';
}
