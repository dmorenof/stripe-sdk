<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\SelfieReport;

enum StatusEnum: string
{
    case Unverified = 'unverified';
    case Verified = 'verified';
}
