<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\FinancialConnectionsPaymentMethodOptions;

enum PrefetchEnum: string
{
    case Balances = 'balances';
    case Ownership = 'ownership';
    case Transactions = 'transactions';
}
