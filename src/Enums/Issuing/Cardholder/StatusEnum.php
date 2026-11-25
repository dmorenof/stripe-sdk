<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Cardholder;

enum StatusEnum: string
{
    case Active = 'active';
    case Blocked = 'blocked';
    case Inactive = 'inactive';
}
