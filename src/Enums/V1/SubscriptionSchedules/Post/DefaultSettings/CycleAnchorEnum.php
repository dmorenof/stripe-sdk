<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\DefaultSettings;

enum CycleAnchorEnum: string
{
    case Automatic = 'automatic';
    case PhaseStart = 'phase_start';
}
