<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Account\CapabilityFutureRequirements;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Account\RequirementsAlternative> */
final class AlternativesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Account\RequirementsAlternative::class;
}
