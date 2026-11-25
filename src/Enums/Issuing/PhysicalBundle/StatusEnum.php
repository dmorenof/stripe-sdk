<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\PhysicalBundle;

enum StatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Review = 'review';
}
