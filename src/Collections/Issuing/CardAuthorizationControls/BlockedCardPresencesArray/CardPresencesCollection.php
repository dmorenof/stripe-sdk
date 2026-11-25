<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardAuthorizationControls\BlockedCardPresencesArray;

final class CardPresencesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Issuing\CardAuthorizationControls\BlockedCardPresencesItem\CardPresencesEnum::class;
}
