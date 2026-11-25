<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsKlarnaRequest3Variant1\OnDemand;

enum PurchaseIntervalEnum: string
{
    case Day = 'day';
    case Month = 'month';
    case Week = 'week';
    case Year = 'year';
}
