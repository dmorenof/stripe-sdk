<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentMethods\Post\UsBankAccount;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
