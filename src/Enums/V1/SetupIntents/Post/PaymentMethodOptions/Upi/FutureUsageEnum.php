<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Upi;

enum FutureUsageEnum: string
{
    case Empty_ = '';
    case None = 'none';
    case OffSession = 'off_session';
    case OnSession = 'on_session';
}
