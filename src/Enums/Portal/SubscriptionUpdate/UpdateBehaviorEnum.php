<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Portal\SubscriptionUpdate;

enum UpdateBehaviorEnum: string
{
    case ContinueTrial = 'continue_trial';
    case EndTrial = 'end_trial';
}
