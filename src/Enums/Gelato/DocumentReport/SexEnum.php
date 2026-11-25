<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\DocumentReport;

enum SexEnum: string
{
    case redacted = '[redacted]';
    case Female = 'female';
    case Male = 'male';
    case Unknown = 'unknown';
}
