<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardholderAuthorizationControls\BlockedCardPresencesArray;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Issuing\CardholderAuthorizationControls\BlockedCardPresencesItem\CardPresencesEnum> */
final class CardPresencesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Issuing\CardholderAuthorizationControls\BlockedCardPresencesItem\CardPresencesEnum::class;
}
