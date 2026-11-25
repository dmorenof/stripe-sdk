<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\BySubscription\Pause\Post\BillFor\OutstandingUsageThrough;

enum ThroughTypeEnum: string
{
    case None = 'none';
    case Now = 'now';
}
