<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoice\PaymentMethodOptionsUsBankAccount;

enum VerificationMethodEnum: string
{
    case Automatic = 'automatic';
    case Instant = 'instant';
    case Microdeposits = 'microdeposits';
}
