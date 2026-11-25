<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\Cardholders\Post\SpendingControls\BlockedCardPresencesArray;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\V1\Issuing\Cardholders\Post\SpendingControls\BlockedCardPresencesItem\CardPresencesEnum> */
final class CardPresencesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Issuing\Cardholders\Post\SpendingControls\BlockedCardPresencesItem\CardPresencesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
