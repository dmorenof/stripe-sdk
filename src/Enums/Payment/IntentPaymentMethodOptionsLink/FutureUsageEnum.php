<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\IntentPaymentMethodOptionsLink;

enum FutureUsageEnum: string
{
    case None = 'none';
    case OffSession = 'off_session';
}
