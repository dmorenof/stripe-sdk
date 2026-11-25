<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\Capabilities;

enum PixPaymentsEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
