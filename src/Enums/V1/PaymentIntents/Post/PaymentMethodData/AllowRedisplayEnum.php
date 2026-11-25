<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentIntents\Post\PaymentMethodData;

enum AllowRedisplayEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
