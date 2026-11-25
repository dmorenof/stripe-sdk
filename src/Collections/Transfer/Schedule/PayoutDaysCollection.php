<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Transfer\Schedule;

final class PayoutDaysCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Transfer\Schedule\PayoutDaysEnum::class;
}
