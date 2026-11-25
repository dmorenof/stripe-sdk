<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Pause\PauseAt;

enum AtTypeEnum: string
{
    case Now = 'now';
    case Timestamp = 'timestamp';
}
