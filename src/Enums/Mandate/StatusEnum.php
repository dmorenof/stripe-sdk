<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Mandate;

enum StatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
