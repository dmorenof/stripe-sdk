<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features;

/**
 * financial_addresses
 */
final class FinancialAddressesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post\Features\FinancialAddresses\AddressesAbaRequest $aba;
}
