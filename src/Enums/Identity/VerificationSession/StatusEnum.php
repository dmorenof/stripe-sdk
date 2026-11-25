<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Identity\VerificationSession;

enum StatusEnum: string
{
    case Canceled = 'canceled';
    case Processing = 'processing';
    case RequiresInput = 'requires_input';
    case Verified = 'verified';
}
