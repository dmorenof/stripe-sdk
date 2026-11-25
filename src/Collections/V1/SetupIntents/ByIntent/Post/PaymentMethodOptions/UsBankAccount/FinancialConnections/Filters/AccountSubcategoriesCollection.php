<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections\Filters;

final class AccountSubcategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\SetupIntents\ByIntent\Post\PaymentMethodOptions\UsBankAccount\FinancialConnections\Filters\AccountSubcategoriesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
