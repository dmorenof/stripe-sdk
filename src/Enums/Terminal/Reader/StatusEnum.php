<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Terminal\Reader;

enum StatusEnum: string
{
    case Offline = 'offline';
    case Online = 'online';
}
