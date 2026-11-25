<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Authorizations\Get\Query;

enum QueryStatusEnum: string
{
    case Closed = 'closed';
    case Expired = 'expired';
    case Pending = 'pending';
    case Reversed = 'reversed';
}
