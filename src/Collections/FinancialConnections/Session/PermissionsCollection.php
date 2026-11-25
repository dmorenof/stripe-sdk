<?php

declare(strict_types=1);

namespace StripeSDK\Collections\FinancialConnections\Session;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\FinancialConnections\Session\PermissionsEnum> */
final class PermissionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\FinancialConnections\Session\PermissionsEnum::class;
}
