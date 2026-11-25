<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Portal\SubscriptionUpdate;

enum CycleAnchorEnum: string
{
    case Now = 'now';
    case Unchanged = 'unchanged';
}
