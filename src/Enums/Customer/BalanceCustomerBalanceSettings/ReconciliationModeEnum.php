<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Customer\BalanceCustomerBalanceSettings;

enum ReconciliationModeEnum: string
{
    case Automatic = 'automatic';
    case Manual = 'manual';
}
