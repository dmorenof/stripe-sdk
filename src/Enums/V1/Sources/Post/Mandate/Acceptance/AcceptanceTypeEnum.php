<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Sources\Post\Mandate\Acceptance;

enum AcceptanceTypeEnum: string
{
    case Offline = 'offline';
    case Online = 'online';
}
