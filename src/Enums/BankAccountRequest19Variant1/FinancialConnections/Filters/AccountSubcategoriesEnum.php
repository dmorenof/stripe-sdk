<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccountRequest19Variant1\FinancialConnections\Filters;

enum AccountSubcategoriesEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
