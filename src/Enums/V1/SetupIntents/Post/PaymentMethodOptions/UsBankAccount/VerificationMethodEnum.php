<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\UsBankAccount;

enum VerificationMethodEnum: string
{
    case Automatic = 'automatic';
    case Instant = 'instant';
    case Microdeposits = 'microdeposits';
}
