<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InvoiceIntervalRequest2Variant1;

enum InvoiceIntervalRequest2Variant1IntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
