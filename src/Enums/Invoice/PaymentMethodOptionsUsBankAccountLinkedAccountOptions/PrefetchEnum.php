<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoice\PaymentMethodOptionsUsBankAccountLinkedAccountOptions;

enum PrefetchEnum: string
{
    case Balances = 'balances';
    case Ownership = 'ownership';
    case Transactions = 'transactions';
}
