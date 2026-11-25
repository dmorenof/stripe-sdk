<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\Meter;

enum StatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
}
