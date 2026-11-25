<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\ByAccount\ExternalAccounts\Get\Query;

enum QueryObjectEnum: string
{
    case BankAccount = 'bank_account';
    case Card = 'card';
}
