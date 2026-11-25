<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Tax\Settings;

enum StatusEnum: string
{
    case Active = 'active';
    case Pending = 'pending';
}
