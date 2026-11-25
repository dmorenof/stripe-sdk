<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Billing\Meters\Post;

enum TimeWindowEnum: string
{
    case Day = 'day';
    case Hour = 'hour';
}
