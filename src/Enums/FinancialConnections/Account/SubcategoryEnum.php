<?php

declare(strict_types=1);

namespace StripeSDK\Enums\FinancialConnections\Account;

enum SubcategoryEnum: string
{
    case Checking = 'checking';
    case CreditCard = 'credit_card';
    case LineOfCredit = 'line_of_credit';
    case Mortgage = 'mortgage';
    case Other = 'other';
    case Savings = 'savings';
}
