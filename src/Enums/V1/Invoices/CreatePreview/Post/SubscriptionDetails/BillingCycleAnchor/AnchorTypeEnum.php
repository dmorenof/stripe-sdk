<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\BillingCycleAnchor;

enum AnchorTypeEnum: string
{
    case Now = 'now';
    case Timestamp = 'timestamp';
    case Unchanged = 'unchanged';
}
