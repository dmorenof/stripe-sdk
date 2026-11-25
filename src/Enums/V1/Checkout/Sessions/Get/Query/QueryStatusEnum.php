<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Get\Query;

enum QueryStatusEnum: string
{
    case Complete = 'complete';
    case Expired = 'expired';
    case Open = 'open';
}
