<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\Capabilities;

enum P24PaymentsEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
