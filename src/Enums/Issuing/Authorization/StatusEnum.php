<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Authorization;

enum StatusEnum: string
{
    case Closed = 'closed';
    case Expired = 'expired';
    case Pending = 'pending';
    case Reversed = 'reversed';
}
