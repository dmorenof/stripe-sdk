<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\TwintPaymentMethodOptions;

enum FutureUsageEnum: string
{
    case None = 'none';
    case OffSession = 'off_session';
}
