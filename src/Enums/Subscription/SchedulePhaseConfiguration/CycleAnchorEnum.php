<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulePhaseConfiguration;

enum CycleAnchorEnum: string
{
    case Automatic = 'automatic';
    case PhaseStart = 'phase_start';
}
