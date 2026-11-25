<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\Cards\Post\SpendingControls\SpendingLimitsItem;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\V1\Issuing\Cards\Post\SpendingControls\SpendingLimitsItem\LimitsItemCategoriesEnum> */
final class LimitsItemCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Issuing\Cards\Post\SpendingControls\SpendingLimitsItem\LimitsItemCategoriesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
