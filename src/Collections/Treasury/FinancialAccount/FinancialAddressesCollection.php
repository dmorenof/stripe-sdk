<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Treasury\FinancialAccount;

final class FinancialAddressesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Treasury\FinancialAccountsResourceFinancialAddress::class;
}
