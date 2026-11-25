<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\Settings\BillFor\OutstandingUsageThrough;

enum ThroughTypeEnum: string
{
    case None = 'none';
    case PauseAt = 'pause_at';
}
