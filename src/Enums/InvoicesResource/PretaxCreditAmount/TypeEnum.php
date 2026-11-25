<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InvoicesResource\PretaxCreditAmount;

enum TypeEnum: string
{
    case CreditBalanceTransaction = 'credit_balance_transaction';
    case Discount = 'discount';
}
