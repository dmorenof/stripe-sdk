<?php

declare(strict_types=1);

namespace StripeSDK\V1\SubscriptionSchedules\BySchedule;

final class Release extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/subscription_schedules/{schedule}/release [operationId: PostSubscriptionSchedulesScheduleRelease] */
    /**
     * Release a schedule
     *
     * <p>Releases the subscription schedule immediately, which will stop scheduling of its phases, but leave any existing subscription in place. A schedule can only be released if its status is <code>not_started</code> or <code>active</code>. If the subscription schedule is currently associated with a subscription, releasing it will remove its <code>subscription</code> property and set the subscription’s ID to the <code>released_subscription</code> property.</p>
     */
    public static function post(string $schedule, ?\StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Release\Post $payload = null): \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionSchedules\BySchedule\Release::class)->post($schedule, $payload);
    }
}
