<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\UsBankAccountPaymentMethodOptions;

enum VerificationMethodEnum: string
{
    case Automatic = 'automatic';
    case Instant = 'instant';
}
