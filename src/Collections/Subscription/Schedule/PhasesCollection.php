<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Subscription\Schedule;

final class PhasesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\Subscription\SchedulePhaseConfiguration::class;
}
