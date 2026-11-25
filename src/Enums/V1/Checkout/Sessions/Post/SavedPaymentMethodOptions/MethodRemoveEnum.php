<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\SavedPaymentMethodOptions;

enum MethodRemoveEnum: string
{
    case Disabled = 'disabled';
    case Enabled = 'enabled';
}
