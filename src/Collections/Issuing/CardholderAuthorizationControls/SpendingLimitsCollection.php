<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Issuing\CardholderAuthorizationControls;

final class SpendingLimitsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Issuing\CardholderSpendingLimit::class;
}
