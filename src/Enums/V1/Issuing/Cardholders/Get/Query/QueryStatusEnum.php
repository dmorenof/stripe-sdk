<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cardholders\Get\Query;

enum QueryStatusEnum: string
{
    case Active = 'active';
    case Blocked = 'blocked';
    case Inactive = 'inactive';
}
