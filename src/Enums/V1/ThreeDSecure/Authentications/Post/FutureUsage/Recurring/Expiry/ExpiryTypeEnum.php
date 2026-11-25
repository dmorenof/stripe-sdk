<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FutureUsage\Recurring\Expiry;

enum ExpiryTypeEnum: string
{
    case Date = 'date';
    case Never_ = 'never';
}
