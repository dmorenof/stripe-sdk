<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccountsResourceInboundAchToggleSettings;

enum StatusEnum: string
{
    case Active = 'active';
    case Pending = 'pending';
    case Restricted = 'restricted';
}
