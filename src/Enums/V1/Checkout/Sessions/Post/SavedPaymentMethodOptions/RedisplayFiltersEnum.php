<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\SavedPaymentMethodOptions;

enum RedisplayFiltersEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
