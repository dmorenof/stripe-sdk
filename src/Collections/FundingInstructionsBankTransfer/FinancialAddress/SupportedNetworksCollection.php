<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FundingInstructionsBankTransfer\FinancialAddress;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\FundingInstructionsBankTransfer\FinancialAddress\SupportedNetworksEnum> */
final class SupportedNetworksCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\FundingInstructionsBankTransfer\FinancialAddress\SupportedNetworksEnum::class;
}
