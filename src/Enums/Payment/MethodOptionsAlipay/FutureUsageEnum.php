<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsAlipay;

enum FutureUsageEnum: string
{
    case None = 'none';
    case OffSession = 'off_session';
}
