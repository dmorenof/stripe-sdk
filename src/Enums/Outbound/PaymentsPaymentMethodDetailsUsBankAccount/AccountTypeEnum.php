<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Outbound\PaymentsPaymentMethodDetailsUsBankAccount;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
