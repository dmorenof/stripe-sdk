<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Transfer\Schedule;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\Enums\Transfer\Schedule\PayoutDaysEnum> */
final class PayoutDaysCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Transfer\Schedule\PayoutDaysEnum::class;
}
