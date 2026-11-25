<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post;

enum CycleAnchorEnum: string
{
    case Now = 'now';
    case Unchanged = 'unchanged';
}
