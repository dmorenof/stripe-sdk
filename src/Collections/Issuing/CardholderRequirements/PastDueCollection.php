<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardholderRequirements;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Issuing\CardholderRequirements\PastDueEnum> */
final class PastDueCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Issuing\CardholderRequirements\PastDueEnum::class;
}
