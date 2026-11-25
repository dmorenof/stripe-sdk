<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentIntents\Post;

enum FutureUsageEnum: string
{
    case OffSession = 'off_session';
    case OnSession = 'on_session';
}
