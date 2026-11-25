<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card;

enum ExtendedAuthorizationEnum: string
{
    case IfAvailable = 'if_available';
    case Never_ = 'never';
}
