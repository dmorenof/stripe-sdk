<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\PixPaymentMethodOptions;

enum FutureUsageEnum: string
{
    case None = 'none';
    case OffSession = 'off_session';
}
