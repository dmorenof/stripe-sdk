<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Coupon;

enum DurationEnum: string
{
    case Forever = 'forever';
    case Once = 'once';
    case Repeating = 'repeating';
}
