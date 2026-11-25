<?php

declare(strict_types=1);

namespace StripeSDK\Collections\BankAccountRequest13Variant1\FinancialConnections\Filters;

final class AccountSubcategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\BankAccountRequest13Variant1\FinancialConnections\Filters\AccountSubcategoriesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
