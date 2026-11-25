<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Billing\CreditBalanceSummary;

final class BalancesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Credit\Balance::class;
}
