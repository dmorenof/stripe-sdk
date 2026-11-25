<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Plan;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\PlanTier> */
final class TiersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\PlanTier::class;
}
