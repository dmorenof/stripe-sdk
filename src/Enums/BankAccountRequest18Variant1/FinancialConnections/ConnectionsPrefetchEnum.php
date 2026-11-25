<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccountRequest18Variant1\FinancialConnections;

enum ConnectionsPrefetchEnum: string
{
    case Balances = 'balances';
    case Ownership = 'ownership';
    case Transactions = 'transactions';
}
