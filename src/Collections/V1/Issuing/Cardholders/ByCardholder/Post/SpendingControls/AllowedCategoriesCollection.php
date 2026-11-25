<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls\AllowedCategoriesEnum> */
final class AllowedCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls\AllowedCategoriesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
