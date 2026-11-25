<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\Capabilities;

enum TreasuryEnum: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
