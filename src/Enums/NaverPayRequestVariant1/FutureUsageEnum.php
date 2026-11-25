<?php

declare(strict_types=1);

namespace StripeSDK\Enums\NaverPayRequestVariant1;

enum FutureUsageEnum: string
{
    case Empty_ = '';
    case None = 'none';
    case OffSession = 'off_session';
}
