<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Terminal\Readers\Get\Query;

enum QueryStatusEnum: string
{
    case Offline = 'offline';
    case Online = 'online';
}
