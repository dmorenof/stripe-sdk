<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodDetailsPaymentRecordUsBankAccount;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
