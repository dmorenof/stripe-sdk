<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\ShippingOptionsItem\ShippingRateData;

enum DataTypeEnum: string
{
    case FixedAmount = 'fixed_amount';
}
