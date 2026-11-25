<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FinancialConnections\Account;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\FinancialConnections\Account\SubscriptionsEnum> */
final class SubscriptionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\FinancialConnections\Account\SubscriptionsEnum::class;
}
