<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls\SpendingLimitsItem;

final class LimitsItemCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls\SpendingLimitsItem\LimitsItemCategoriesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
