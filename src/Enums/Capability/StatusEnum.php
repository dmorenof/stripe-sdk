<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Capability;

enum StatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
    case Unrequested = 'unrequested';
}
