<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Subscription\Schedule;

final class PauseSchedulesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Subscription\SchedulesResourcePauseSchedule::class;
}
