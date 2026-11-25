<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Account\CapabilityFutureRequirements;

final class AlternativesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Account\RequirementsAlternative::class;
}
