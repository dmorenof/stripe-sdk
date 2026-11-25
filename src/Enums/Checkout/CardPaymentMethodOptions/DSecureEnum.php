<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\CardPaymentMethodOptions;

enum DSecureEnum: string
{
    case Any = 'any';
    case Automatic = 'automatic';
    case Challenge = 'challenge';
}
