<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardAuthorizationControls;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Issuing\CardSpendingLimit> */
final class SpendingLimitsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Issuing\CardSpendingLimit::class;
}
