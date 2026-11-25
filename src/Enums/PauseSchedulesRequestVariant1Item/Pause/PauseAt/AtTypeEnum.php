<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\PauseAt;

enum AtTypeEnum: string
{
    case Now = 'now';
    case Timestamp = 'timestamp';
}
