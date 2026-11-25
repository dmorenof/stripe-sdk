<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardholderRequirements;

final class PastDueCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Issuing\CardholderRequirements\PastDueEnum::class;
}
