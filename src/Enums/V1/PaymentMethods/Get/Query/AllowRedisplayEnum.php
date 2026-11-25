<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentMethods\Get\Query;

enum AllowRedisplayEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
