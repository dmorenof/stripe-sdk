<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\BalanceSettings\Post\Payments\Payouts\Schedule;

enum PayoutDaysEnum: string
{
    case Friday = 'friday';
    case Monday = 'monday';
    case Thursday = 'thursday';
    case Tuesday = 'tuesday';
    case Wednesday = 'wednesday';
}
