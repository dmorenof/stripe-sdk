<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Credit\NotesPretaxCreditAmount;

enum TypeEnum: string
{
    case CreditBalanceTransaction = 'credit_balance_transaction';
    case Discount = 'discount';
}
