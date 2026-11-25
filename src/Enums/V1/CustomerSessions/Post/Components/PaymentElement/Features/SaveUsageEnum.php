<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\CustomerSessions\Post\Components\PaymentElement\Features;

enum SaveUsageEnum: string
{
    case OffSession = 'off_session';
    case OnSession = 'on_session';
}
