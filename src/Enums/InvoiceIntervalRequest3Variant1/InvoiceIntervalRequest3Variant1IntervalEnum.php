<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InvoiceIntervalRequest3Variant1;

enum InvoiceIntervalRequest3Variant1IntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
