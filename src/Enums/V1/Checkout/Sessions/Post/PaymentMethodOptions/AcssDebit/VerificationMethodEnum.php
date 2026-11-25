<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit;

enum VerificationMethodEnum: string
{
    case Automatic = 'automatic';
    case Instant = 'instant';
    case Microdeposits = 'microdeposits';
}
