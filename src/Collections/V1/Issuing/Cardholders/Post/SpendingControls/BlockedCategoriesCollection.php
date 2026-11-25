<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\Cardholders\Post\SpendingControls;

final class BlockedCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Issuing\Cardholders\Post\SpendingControls\BlockedCategoriesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
