<?php

declare(strict_types=1);

namespace StripeSDK\Requests\BankAccountRequest9Variant1\FinancialConnections;

/**
 * invoice_linked_account_options_filters_param
 */
final class ConnectionsFiltersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\BankAccountRequest9Variant1\FinancialConnections\Filters\AccountSubcategoriesCollection $account_subcategories;
}
