<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodUsBankAccount;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
