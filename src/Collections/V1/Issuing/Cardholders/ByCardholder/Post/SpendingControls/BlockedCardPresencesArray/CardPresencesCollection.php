<?php

declare(strict_types=1);

namespace StripeSDK\Collections\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls\BlockedCardPresencesArray;

final class CardPresencesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\V1\Issuing\Cardholders\ByCardholder\Post\SpendingControls\BlockedCardPresencesItem\CardPresencesEnum::class;
    protected const array ITEM_VALIDATION = [
        'maxLength' => 5000,
    ];
}
