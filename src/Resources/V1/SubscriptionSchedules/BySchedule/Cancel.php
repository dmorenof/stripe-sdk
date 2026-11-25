<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\SubscriptionSchedules\BySchedule;

final class Cancel extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/subscription_schedules/{schedule}/cancel',
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
     * Cancel a schedule
     *
     * <p>Cancels a subscription schedule and its associated subscription immediately (if the subscription schedule has an active subscription). A subscription schedule can only be canceled if its status is <code>not_started</code> or <code>active</code>.</p>
     */
    public function post(string $schedule, ?\StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Cancel\Post $payload = null): \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['schedule' => $schedule], body: $payload);
        return $result;
    }
}
