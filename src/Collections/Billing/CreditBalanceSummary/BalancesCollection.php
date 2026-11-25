<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Billing\CreditBalanceSummary;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Credit\Balance> */
final class BalancesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Credit\Balance::class;
}
