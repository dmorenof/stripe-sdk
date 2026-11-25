<?php

declare(strict_types=1);

namespace StripeSDK\Collections\BankAccountRequest10Variant1\FinancialConnections;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\BankAccountRequest10Variant1\FinancialConnections\ConnectionsPermissionsEnum> */
final class ConnectionsPermissionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\BankAccountRequest10Variant1\FinancialConnections\ConnectionsPermissionsEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
