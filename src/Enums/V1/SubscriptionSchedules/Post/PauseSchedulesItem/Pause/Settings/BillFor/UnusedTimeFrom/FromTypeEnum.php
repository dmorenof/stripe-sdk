<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings\BillFor\UnusedTimeFrom;

enum FromTypeEnum: string
{
    case ItemCurrentPeriodStart = 'item_current_period_start';
    case None = 'none';
    case PauseAt = 'pause_at';
}
