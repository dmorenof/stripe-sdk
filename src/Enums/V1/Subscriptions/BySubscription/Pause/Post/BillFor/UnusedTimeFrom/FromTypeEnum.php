<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\BySubscription\Pause\Post\BillFor\UnusedTimeFrom;

enum FromTypeEnum: string
{
    case ItemCurrentPeriodStart = 'item_current_period_start';
    case None = 'none';
    case Now = 'now';
}
