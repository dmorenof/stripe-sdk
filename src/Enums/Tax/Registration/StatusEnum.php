<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Tax\Registration;

enum StatusEnum: string
{
    case Active = 'active';
    case Expired = 'expired';
    case Scheduled = 'scheduled';
}
