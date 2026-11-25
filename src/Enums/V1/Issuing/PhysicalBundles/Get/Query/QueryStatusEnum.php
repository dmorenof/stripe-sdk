<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\PhysicalBundles\Get\Query;

enum QueryStatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Review = 'review';
}
