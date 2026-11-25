<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\Settings;

enum CycleAnchorEnum: string
{
    case ResumeAt = 'resume_at';
    case Unchanged = 'unchanged';
}
