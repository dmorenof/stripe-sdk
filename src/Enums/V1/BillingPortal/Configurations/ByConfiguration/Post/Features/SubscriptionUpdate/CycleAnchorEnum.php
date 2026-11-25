<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate;

enum CycleAnchorEnum: string
{
    case Now = 'now';
    case Unchanged = 'unchanged';
}
