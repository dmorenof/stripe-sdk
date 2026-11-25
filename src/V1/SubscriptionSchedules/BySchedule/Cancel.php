<?php

declare(strict_types=1);

namespace StripeSDK\V1\SubscriptionSchedules\BySchedule;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/subscription_schedules/{schedule}/cancel [operationId: PostSubscriptionSchedulesScheduleCancel] */
    /**
     * Cancel a schedule
     *
     * <p>Cancels a subscription schedule and its associated subscription immediately (if the subscription schedule has an active subscription). A subscription schedule can only be canceled if its status is <code>not_started</code> or <code>active</code>.</p>
     */
    public static function post(string $schedule, ?\StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Cancel\Post $payload = null): \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionSchedules\BySchedule\Cancel::class)->post($schedule, $payload);
    }
}
