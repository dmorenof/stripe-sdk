<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Subscription\Schedule;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\Subscription\SchedulesResourcePauseSchedule> */
final class PauseSchedulesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Subscription\SchedulesResourcePauseSchedule::class;
}
