<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsFinancialConnectionsCommonLinkedAccountOptionsFilters;

enum AccountSubcategoriesEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
