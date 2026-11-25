<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodData\UsBankAccount;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
