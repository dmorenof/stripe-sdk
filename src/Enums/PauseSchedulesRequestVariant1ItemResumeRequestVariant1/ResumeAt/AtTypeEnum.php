<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PauseSchedulesRequestVariant1ItemResumeRequestVariant1\ResumeAt;

enum AtTypeEnum: string
{
    case Duration = 'duration';
    case Now = 'now';
    case Timestamp = 'timestamp';
}
