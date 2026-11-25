<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\BillingPortal\Configurations\Post\Features\SubscriptionUpdate;

enum CycleAnchorEnum: string
{
    case Now = 'now';
    case Unchanged = 'unchanged';
}
