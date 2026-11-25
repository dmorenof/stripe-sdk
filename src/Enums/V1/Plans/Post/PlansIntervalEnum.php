<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Plans\Post;

enum PlansIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
