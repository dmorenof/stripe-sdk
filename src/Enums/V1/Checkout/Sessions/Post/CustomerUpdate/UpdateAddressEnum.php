<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\CustomerUpdate;

enum UpdateAddressEnum: string
{
    case Auto = 'auto';
    case Never_ = 'never';
}
