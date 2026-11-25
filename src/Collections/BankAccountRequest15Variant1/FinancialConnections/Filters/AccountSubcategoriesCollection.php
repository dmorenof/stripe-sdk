<?php

declare(strict_types=1);

namespace StripeSDK\Collections\BankAccountRequest15Variant1\FinancialConnections\Filters;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\BankAccountRequest15Variant1\FinancialConnections\Filters\AccountSubcategoriesEnum> */
final class AccountSubcategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\BankAccountRequest15Variant1\FinancialConnections\Filters\AccountSubcategoriesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
