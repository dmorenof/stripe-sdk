<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\FinancialConnections\Sessions\Post\Filters;

enum AccountSubcategoriesEnum: string
{
    case Checking = 'checking';
    case CreditCard = 'credit_card';
    case LineOfCredit = 'line_of_credit';
    case Mortgage = 'mortgage';
    case Savings = 'savings';
}
