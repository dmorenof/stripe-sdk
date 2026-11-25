<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardholderAuthorizationControls\BlockedCardPresencesArray;

final class CardPresencesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Issuing\CardholderAuthorizationControls\BlockedCardPresencesItem\CardPresencesEnum::class;
}
