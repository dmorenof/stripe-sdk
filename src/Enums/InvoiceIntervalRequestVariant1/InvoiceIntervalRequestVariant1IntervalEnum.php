<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InvoiceIntervalRequestVariant1;

enum InvoiceIntervalRequestVariant1IntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
