<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections;

/**
 * linked_account_options_filters_param
 */
final class ConnectionsFiltersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections\Filters\AccountSubcategoriesCollection $account_subcategories;
}
