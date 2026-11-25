<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Pix;

enum IncludesIofEnum: string
{
    case Always = 'always';
    case Never_ = 'never';
}
