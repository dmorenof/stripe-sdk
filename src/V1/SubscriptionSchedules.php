<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class SubscriptionSchedules extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/subscription_schedules [operationId: GetSubscriptionSchedules] */
    /**
     * List all schedules
     *
     * <p>Retrieves the list of your subscription schedules.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\SubscriptionSchedules $params = null): \StripeSDK\Responses\V1\SubscriptionSchedules\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionSchedules::class)->get($params);
    }

    /** POST /v1/subscription_schedules [operationId: PostSubscriptionSchedules] */
    /**
     * Create a schedule
     *
     * <p>Creates a new subscription schedule object. Each customer can have up to 500 active or scheduled subscriptions.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\SubscriptionSchedules\Post $payload = null): \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionSchedules::class)->post($payload);
    }

    /** GET /v1/subscription_schedules/{schedule} [operationId: GetSubscriptionSchedulesSchedule] */
    /**
     * Retrieve a schedule
     *
     * <p>Retrieves the details of an existing subscription schedule. You only need to supply the unique subscription schedule identifier that was returned upon subscription schedule creation.</p>
     */
    public static function getBySchedule(string $schedule, ?\StripeSDK\GetParams\V1\SubscriptionSchedules\BySchedule $params = null): \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionSchedules::class)->getBySchedule($schedule, $params);
    }

    /** POST /v1/subscription_schedules/{schedule} [operationId: PostSubscriptionSchedulesSchedule] */
    /**
     * Update a schedule
     *
     * <p>Updates an existing subscription schedule.</p>
     */
    public static function postBySchedule(string $schedule, ?\StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post $payload = null): \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SubscriptionSchedules::class)->postBySchedule($schedule, $payload);
    }
}
