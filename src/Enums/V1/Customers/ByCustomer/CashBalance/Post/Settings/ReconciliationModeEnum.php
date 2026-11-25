<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Customers\ByCustomer\CashBalance\Post\Settings;

enum ReconciliationModeEnum: string
{
    case Automatic = 'automatic';
    case Manual = 'manual';
    case MerchantDefault = 'merchant_default';
}
