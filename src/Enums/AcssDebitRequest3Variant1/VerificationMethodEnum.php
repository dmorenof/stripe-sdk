<?php

declare(strict_types=1);

namespace StripeSDK\Enums\AcssDebitRequest3Variant1;

enum VerificationMethodEnum: string
{
    case Automatic = 'automatic';
    case Instant = 'instant';
    case Microdeposits = 'microdeposits';
}
