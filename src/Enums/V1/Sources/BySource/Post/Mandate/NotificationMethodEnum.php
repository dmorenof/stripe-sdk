<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Sources\BySource\Post\Mandate;

enum NotificationMethodEnum: string
{
    case DeprecatedNone = 'deprecated_none';
    case Email = 'email';
    case Manual = 'manual';
    case None = 'none';
    case StripeEmail = 'stripe_email';
}
