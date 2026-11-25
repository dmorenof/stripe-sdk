<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\CreditBalanceTransaction;

enum TypeEnum: string
{
    case Credit = 'credit';
    case Debit = 'debit';
}
