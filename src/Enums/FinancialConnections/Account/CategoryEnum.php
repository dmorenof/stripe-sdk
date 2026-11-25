<?php

declare(strict_types=1);

namespace StripeSDK\Enums\FinancialConnections\Account;

enum CategoryEnum: string
{
    case Cash = 'cash';
    case Credit = 'credit';
    case Investment = 'investment';
    case Other = 'other';
}
