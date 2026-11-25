<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\IntentPaymentMethodOptionsCard;

enum DSecureEnum: string
{
    case Any = 'any';
    case Automatic = 'automatic';
    case Challenge = 'challenge';
}
