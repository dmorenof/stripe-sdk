<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeStatus;

enum TypeEnum: string
{
    case Error = 'error';
    case Pending = 'pending';
    case RequiresAction = 'requires_action';
    case Scheduled = 'scheduled';
    case Succeeded = 'succeeded';
}
