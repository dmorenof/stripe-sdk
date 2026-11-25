<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post;

/**
 * financial_addresses
 *
 * Contains Features that add FinancialAddresses to the FinancialAccount.
 */
final class FinancialAddressesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post\FinancialAddresses\AddressesAbaRequest $aba;
}
