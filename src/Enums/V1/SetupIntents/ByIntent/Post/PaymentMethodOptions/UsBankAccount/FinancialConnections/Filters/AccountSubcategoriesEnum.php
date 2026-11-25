<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections\Filters;

enum AccountSubcategoriesEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
