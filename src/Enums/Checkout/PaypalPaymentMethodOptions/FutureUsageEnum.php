<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\PaypalPaymentMethodOptions;

enum FutureUsageEnum: string
{
    case None = 'none';
    case OffSession = 'off_session';
}
