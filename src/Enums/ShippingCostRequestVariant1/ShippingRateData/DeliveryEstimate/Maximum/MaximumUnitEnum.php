<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ShippingCostRequestVariant1\ShippingRateData\DeliveryEstimate\Maximum;

enum MaximumUnitEnum: string
{
    case BusinessDay = 'business_day';
    case Day = 'day';
    case Hour = 'hour';
    case Month = 'month';
    case Week = 'week';
}
