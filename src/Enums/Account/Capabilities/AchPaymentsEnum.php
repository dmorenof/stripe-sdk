<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\Capabilities;

enum AchPaymentsEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
