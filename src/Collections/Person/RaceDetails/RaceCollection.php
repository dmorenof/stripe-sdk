<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Person\RaceDetails;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Person\RaceDetails\RaceEnum> */
final class RaceCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Person\RaceDetails\RaceEnum::class;
}
