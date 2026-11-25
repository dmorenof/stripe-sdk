<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccountsResourceAbaToggleSettings;

enum StatusEnum: string
{
    case Active = 'active';
    case Pending = 'pending';
    case Restricted = 'restricted';
}
