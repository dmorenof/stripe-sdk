<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\Post\PaymentIntentData;

enum FutureUsageEnum: string
{
    case OffSession = 'off_session';
    case OnSession = 'on_session';
}
