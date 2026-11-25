<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardholderAuthorizationControls;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Issuing\CardholderSpendingLimit> */
final class SpendingLimitsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Issuing\CardholderSpendingLimit::class;
}
