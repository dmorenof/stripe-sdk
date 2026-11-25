<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FinancialConnections\Account;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\FinancialConnections\Account\MethodTypesEnum> */
final class MethodTypesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\FinancialConnections\Account\MethodTypesEnum::class;
}
