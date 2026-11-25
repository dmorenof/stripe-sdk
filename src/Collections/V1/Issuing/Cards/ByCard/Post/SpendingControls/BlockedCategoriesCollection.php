<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\Cards\ByCard\Post\SpendingControls;

final class BlockedCategoriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post\SpendingControls\BlockedCategoriesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
