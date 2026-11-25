<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\Cards\Post\SpendingControls;

final class AllowedCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Issuing\Cards\Post\SpendingControls\AllowedCategoriesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
