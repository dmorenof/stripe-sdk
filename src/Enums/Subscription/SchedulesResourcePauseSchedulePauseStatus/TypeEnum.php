<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulesResourcePauseSchedulePauseStatus;

enum TypeEnum: string
{
    case Error = 'error';
    case Scheduled = 'scheduled';
    case Succeeded = 'succeeded';
}
