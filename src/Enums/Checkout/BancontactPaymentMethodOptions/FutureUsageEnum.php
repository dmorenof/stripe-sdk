<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\BancontactPaymentMethodOptions;

enum FutureUsageEnum: string
{
    case None = 'none';
    case OffSession = 'off_session';
}
