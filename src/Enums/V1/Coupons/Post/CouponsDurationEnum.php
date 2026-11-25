<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Coupons\Post;

enum CouponsDurationEnum: string
{
    case Forever = 'forever';
    case Once = 'once';
    case Repeating = 'repeating';
}
