<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\Capabilities;

enum GiropayPaymentsEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
