<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Token;

enum StatusEnum: string
{
    case Active = 'active';
    case Deleted = 'deleted';
    case Requested = 'requested';
    case Suspended = 'suspended';
}
