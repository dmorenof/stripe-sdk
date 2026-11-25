<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Plan;

final class TiersCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\PlanTier::class;
}
