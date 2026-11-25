<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Method;

enum AllowRedisplayEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
