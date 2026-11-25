<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\PersonalizationDesign;

enum StatusEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Rejected = 'rejected';
    case Review = 'review';
}
