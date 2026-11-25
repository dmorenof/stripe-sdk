<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FundingInstructionsBankTransfer;

final class FinancialAddressesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\FundingInstructionsBankTransfer\FinancialAddress::class;
}
