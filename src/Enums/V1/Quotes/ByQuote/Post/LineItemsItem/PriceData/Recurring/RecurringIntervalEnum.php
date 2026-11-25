<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Quotes\ByQuote\Post\LineItemsItem\PriceData\Recurring;

enum RecurringIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
