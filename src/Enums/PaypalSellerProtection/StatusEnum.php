<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PaypalSellerProtection;

enum StatusEnum: string
{
    case Eligible = 'eligible';
    case NotEligible = 'not_eligible';
    case PartiallyEligible = 'partially_eligible';
}
