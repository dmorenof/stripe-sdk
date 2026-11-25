<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\PhoneReport;

enum StatusEnum: string
{
    case Unverified = 'unverified';
    case Verified = 'verified';
}
