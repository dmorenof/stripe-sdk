<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Balance\SettingsResourcePayoutSchedule;

final class PayoutDaysCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\Enums\Balance\SettingsResourcePayoutSchedule\PayoutDaysEnum::class;
}
