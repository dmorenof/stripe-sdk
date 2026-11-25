<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\Post\Shipping;

enum ShippingTypeEnum: string
{
    case Bulk = 'bulk';
    case Individual = 'individual';
}
