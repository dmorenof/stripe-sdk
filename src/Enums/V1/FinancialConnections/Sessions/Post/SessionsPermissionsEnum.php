<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\FinancialConnections\Sessions\Post;

enum SessionsPermissionsEnum: string
{
    case Balances = 'balances';
    case Ownership = 'ownership';
    case PaymentMethod = 'payment_method';
    case Transactions = 'transactions';
}
