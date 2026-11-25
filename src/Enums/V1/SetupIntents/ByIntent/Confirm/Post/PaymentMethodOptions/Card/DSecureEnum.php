<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\Card;

enum DSecureEnum: string
{
    case Any = 'any';
    case Automatic = 'automatic';
    case Challenge = 'challenge';
}
