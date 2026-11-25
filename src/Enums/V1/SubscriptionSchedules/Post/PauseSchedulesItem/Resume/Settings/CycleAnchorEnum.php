<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\Settings;

enum CycleAnchorEnum: string
{
    case ResumeAt = 'resume_at';
    case Unchanged = 'unchanged';
}
