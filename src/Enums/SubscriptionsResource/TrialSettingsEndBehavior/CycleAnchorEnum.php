<?php

declare(strict_types=1);

namespace StripeSDK\Enums\SubscriptionsResource\TrialSettingsEndBehavior;

enum CycleAnchorEnum: string
{
    case Now = 'now';
    case Unchanged = 'unchanged';
}
