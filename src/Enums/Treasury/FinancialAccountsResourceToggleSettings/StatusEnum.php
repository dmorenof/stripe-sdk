<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccountsResourceToggleSettings;

enum StatusEnum: string
{
    case Active = 'active';
    case Pending = 'pending';
    case Restricted = 'restricted';
}
