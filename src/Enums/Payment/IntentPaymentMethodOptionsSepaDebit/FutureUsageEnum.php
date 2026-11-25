<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\IntentPaymentMethodOptionsSepaDebit;

enum FutureUsageEnum: string
{
    case None = 'none';
    case OffSession = 'off_session';
    case OnSession = 'on_session';
}
