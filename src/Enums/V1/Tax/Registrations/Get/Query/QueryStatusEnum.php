<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Tax\Registrations\Get\Query;

enum QueryStatusEnum: string
{
    case Active = 'active';
    case All = 'all';
    case Expired = 'expired';
    case Scheduled = 'scheduled';
}
