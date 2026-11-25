<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Identity\VerificationSessions\Get\Query;

enum QueryStatusEnum: string
{
    case Canceled = 'canceled';
    case Processing = 'processing';
    case RequiresInput = 'requires_input';
    case Verified = 'verified';
}
