<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Tokens\Get\Query;

enum QueryStatusEnum: string
{
    case Active = 'active';
    case Deleted = 'deleted';
    case Requested = 'requested';
    case Suspended = 'suspended';
}
