<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\Capabilities;

enum PaypayPaymentsEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
