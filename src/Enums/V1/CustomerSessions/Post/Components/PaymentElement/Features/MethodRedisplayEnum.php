<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\CustomerSessions\Post\Components\PaymentElement\Features;

enum MethodRedisplayEnum: string
{
    case Disabled = 'disabled';
    case Enabled = 'enabled';
}
