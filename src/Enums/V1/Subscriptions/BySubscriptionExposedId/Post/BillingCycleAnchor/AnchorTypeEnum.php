<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\BySubscriptionExposedId\Post\BillingCycleAnchor;

enum AnchorTypeEnum: string
{
    case Now = 'now';
    case Unchanged = 'unchanged';
}
