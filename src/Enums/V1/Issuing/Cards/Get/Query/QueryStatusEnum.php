<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\Get\Query;

enum QueryStatusEnum: string
{
    case Active = 'active';
    case Canceled = 'canceled';
    case Inactive = 'inactive';
}
