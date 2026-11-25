<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodDetailsUsBankAccount;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
