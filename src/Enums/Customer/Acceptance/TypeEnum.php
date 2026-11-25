<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Customer\Acceptance;

enum TypeEnum: string
{
    case Offline = 'offline';
    case Online = 'online';
}
