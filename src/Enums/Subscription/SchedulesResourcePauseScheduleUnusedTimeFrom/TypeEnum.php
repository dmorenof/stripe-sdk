<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleUnusedTimeFrom;

enum TypeEnum: string
{
    case ItemCurrentPeriodStart = 'item_current_period_start';
    case None = 'none';
    case PauseAt = 'pause_at';
}
