<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FinancialConnections\AccountOwnership\Owners;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\FinancialConnections\AccountOwner> */
final class DataCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\FinancialConnections\AccountOwner::class;
}
