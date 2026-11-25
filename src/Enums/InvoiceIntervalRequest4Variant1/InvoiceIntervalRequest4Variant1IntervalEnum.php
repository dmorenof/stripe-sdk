<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InvoiceIntervalRequest4Variant1;

enum InvoiceIntervalRequest4Variant1IntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
