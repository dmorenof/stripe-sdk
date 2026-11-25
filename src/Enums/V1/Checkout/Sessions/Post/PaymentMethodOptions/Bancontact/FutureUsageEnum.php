<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Bancontact;

enum FutureUsageEnum: string
{
    case None = 'none';
    case OffSession = 'off_session';
}
