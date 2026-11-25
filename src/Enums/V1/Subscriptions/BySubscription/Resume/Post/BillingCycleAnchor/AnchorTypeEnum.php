<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\BySubscription\Resume\Post\BillingCycleAnchor;

enum AnchorTypeEnum: string
{
    case Now = 'now';
    case Unchanged = 'unchanged';
}
