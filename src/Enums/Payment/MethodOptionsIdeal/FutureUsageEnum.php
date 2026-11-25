<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsIdeal;

enum FutureUsageEnum: string
{
    case None = 'none';
    case OffSession = 'off_session';
}
