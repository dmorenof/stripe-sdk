<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Billing\Meters\ById\EventSummaries\Get\Query;

enum GroupingWindowEnum: string
{
    case Day = 'day';
    case Hour = 'hour';
}
