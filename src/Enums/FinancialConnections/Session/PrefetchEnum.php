<?php

declare(strict_types=1);

namespace StripeSDK\Enums\FinancialConnections\Session;

enum PrefetchEnum: string
{
    case Balances = 'balances';
    case Ownership = 'ownership';
    case Transactions = 'transactions';
}
