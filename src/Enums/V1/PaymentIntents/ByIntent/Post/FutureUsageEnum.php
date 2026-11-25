<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentIntents\ByIntent\Post;

enum FutureUsageEnum: string
{
    case Empty_ = '';
    case OffSession = 'off_session';
    case OnSession = 'on_session';
}
