<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\SavedPaymentMethodOptions;

enum MethodSaveEnum: string
{
    case Disabled = 'disabled';
    case Enabled = 'enabled';
}
