<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Payouts\Post;

enum PayoutsMethodEnum: string
{
    case Instant = 'instant';
    case Standard = 'standard';
}
