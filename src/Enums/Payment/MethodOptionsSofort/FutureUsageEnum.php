<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsSofort;

enum FutureUsageEnum: string
{
    case None = 'none';
    case OffSession = 'off_session';
}
