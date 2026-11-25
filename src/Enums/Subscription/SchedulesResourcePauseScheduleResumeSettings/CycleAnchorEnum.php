<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeSettings;

enum CycleAnchorEnum: string
{
    case ResumeAt = 'resume_at';
    case Unchanged = 'unchanged';
}
