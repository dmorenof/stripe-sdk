<?php

declare(strict_types=1);

namespace StripeSDK\Requests\BankAccountRequest11Variant1;

/**
 * invoice_linked_account_options_param
 */
final class FinancialConnectionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\BankAccountRequest11Variant1\FinancialConnections\ConnectionsFiltersRequest $filters;
    public \StripeSDK\Collections\BankAccountRequest11Variant1\FinancialConnections\ConnectionsPermissionsCollection $permissions;
    public \StripeSDK\Collections\BankAccountRequest11Variant1\FinancialConnections\ConnectionsPrefetchCollection $prefetch;
}
