<?php

declare(strict_types=1);

namespace StripeSDK\Enums\VerificationSessionRedaction;

enum StatusEnum: string
{
    case Processing = 'processing';
    case Redacted = 'redacted';
    case Validated = 'validated';
}
