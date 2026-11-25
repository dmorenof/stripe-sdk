<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\FinancialConnections\Sessions\Post;

enum SessionsPrefetchEnum: string
{
    case Balances = 'balances';
    case Ownership = 'ownership';
    case Transactions = 'transactions';
}
