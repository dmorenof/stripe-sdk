<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Invoice\ThresholdReason;

final class ReasonsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Invoice\ItemThresholdReason::class;
}
