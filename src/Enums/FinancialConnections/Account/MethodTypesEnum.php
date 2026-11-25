<?php

declare(strict_types=1);

namespace StripeSDK\Enums\FinancialConnections\Account;

enum MethodTypesEnum: string
{
    case Link = 'link';
    case UsBankAccount = 'us_bank_account';
}
