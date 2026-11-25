<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Account\CapabilityFutureRequirements;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Account\RequirementsError> */
final class ErrorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Account\RequirementsError::class;
}
