<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\AcssDebitPaymentMethodOptions;

enum VerificationMethodEnum: string
{
    case Automatic = 'automatic';
    case Instant = 'instant';
    case Microdeposits = 'microdeposits';
}
