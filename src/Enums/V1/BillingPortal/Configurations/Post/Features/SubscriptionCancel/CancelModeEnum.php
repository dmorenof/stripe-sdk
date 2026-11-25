<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\BillingPortal\Configurations\Post\Features\SubscriptionCancel;

enum CancelModeEnum: string
{
    case AtPeriodEnd = 'at_period_end';
    case Immediately = 'immediately';
}
