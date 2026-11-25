<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\SubscriptionSchedules\BySchedule;

final class Release extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/subscription_schedules/{schedule}/release',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Subscription\\Schedule',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'schedule' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Release a schedule
     *
     * <p>Releases the subscription schedule immediately, which will stop scheduling of its phases, but leave any existing subscription in place. A schedule can only be released if its status is <code>not_started</code> or <code>active</code>. If the subscription schedule is currently associated with a subscription, releasing it will remove its <code>subscription</code> property and set the subscription’s ID to the <code>released_subscription</code> property.</p>
     */
    public function post(string $schedule, ?\StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Release\Post $payload = null): \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['schedule' => $schedule], body: $payload);
        return $result;
    }
}
