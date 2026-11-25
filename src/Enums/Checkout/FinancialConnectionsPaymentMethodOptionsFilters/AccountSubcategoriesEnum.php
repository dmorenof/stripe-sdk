<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\FinancialConnectionsPaymentMethodOptionsFilters;

enum AccountSubcategoriesEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
