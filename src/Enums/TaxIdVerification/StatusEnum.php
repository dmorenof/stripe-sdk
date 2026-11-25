<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxIdVerification;

enum StatusEnum: string
{
    case Pending = 'pending';
    case Unavailable = 'unavailable';
    case Unverified = 'unverified';
    case Verified = 'verified';
}
