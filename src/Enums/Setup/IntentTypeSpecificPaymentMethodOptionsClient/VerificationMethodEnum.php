<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\IntentTypeSpecificPaymentMethodOptionsClient;

enum VerificationMethodEnum: string
{
    case Automatic = 'automatic';
    case Instant = 'instant';
    case Microdeposits = 'microdeposits';
}
