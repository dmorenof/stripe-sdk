<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Intent;

enum FutureUsageEnum: string
{
    case OffSession = 'off_session';
    case OnSession = 'on_session';
}
