<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentMethods\ByPaymentMethod\Post;

enum AllowRedisplayEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
