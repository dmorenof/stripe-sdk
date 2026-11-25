<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice\ThresholdReason;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Invoice\ItemThresholdReason> */
final class ReasonsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Invoice\ItemThresholdReason::class;
}
