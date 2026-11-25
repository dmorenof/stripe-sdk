<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cardholders\ByCardholder\Post;

enum ByCardholderStatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
}
