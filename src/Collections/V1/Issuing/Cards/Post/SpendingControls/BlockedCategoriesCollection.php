<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\Cards\Post\SpendingControls;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\V1\Issuing\Cards\Post\SpendingControls\BlockedCategoriesEnum> */
final class BlockedCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Issuing\Cards\Post\SpendingControls\BlockedCategoriesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
