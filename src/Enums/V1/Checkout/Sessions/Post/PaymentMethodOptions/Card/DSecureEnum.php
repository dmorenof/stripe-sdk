<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card;

enum DSecureEnum: string
{
    case Any = 'any';
    case Automatic = 'automatic';
    case Challenge = 'challenge';
}
