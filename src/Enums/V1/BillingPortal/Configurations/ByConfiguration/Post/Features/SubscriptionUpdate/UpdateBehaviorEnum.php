<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate;

enum UpdateBehaviorEnum: string
{
    case ContinueTrial = 'continue_trial';
    case EndTrial = 'end_trial';
}
