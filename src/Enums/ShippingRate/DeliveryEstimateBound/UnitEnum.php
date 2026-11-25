<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ShippingRate\DeliveryEstimateBound;

enum UnitEnum: string
{
    case BusinessDay = 'business_day';
    case Day = 'day';
    case Hour = 'hour';
    case Month = 'month';
    case Week = 'week';
}
