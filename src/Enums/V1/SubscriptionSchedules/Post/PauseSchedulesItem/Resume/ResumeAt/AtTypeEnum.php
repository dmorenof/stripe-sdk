<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\ResumeAt;

enum AtTypeEnum: string
{
    case Duration = 'duration';
    case Now = 'now';
    case Timestamp = 'timestamp';
}
