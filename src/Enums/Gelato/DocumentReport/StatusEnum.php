<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\DocumentReport;

enum StatusEnum: string
{
    case Unverified = 'unverified';
    case Verified = 'verified';
}
