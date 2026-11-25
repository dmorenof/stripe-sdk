<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Paypal;

enum FutureUsageEnum: string
{
    case Empty_ = '';
    case None = 'none';
    case OffSession = 'off_session';
}
