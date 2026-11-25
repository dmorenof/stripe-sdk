<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payout;

enum TypeEnum: string
{
    case BankAccount = 'bank_account';
    case Card = 'card';
}
