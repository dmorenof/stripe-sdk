<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class SubscriptionSchedules extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/subscription_schedules',
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
                'type' => '\\StripeSDK\\Responses\\V1\\SubscriptionSchedules\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'canceled_at' => 'nested',
            'completed_at' => 'nested',
            'created' => 'nested',
            'expand' => 'nested',
            'released_at' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all schedules
     *
     * <p>Retrieves the list of your subscription schedules.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\SubscriptionSchedules $params = null): \StripeSDK\Responses\V1\SubscriptionSchedules\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\SubscriptionSchedules\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/subscription_schedules',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'billing_mode' => 'nested',
            'default_settings' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
            'pause_schedules' => 'nested',
            'phases' => 'nested',
            'start_date' => 'nested',
        ],
    ];

    /**
     * Create a schedule
     *
     * <p>Creates a new subscription schedule object. Each customer can have up to 500 active or scheduled subscriptions.</p>
     */
    public function post(?\StripeSDK\Requests\V1\SubscriptionSchedules\Post $payload = null): \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_SCHEDULE = [
        'method' => 'GET',
        'path' => '/v1/subscription_schedules/{schedule}',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a schedule
     *
     * <p>Retrieves the details of an existing subscription schedule. You only need to supply the unique subscription schedule identifier that was returned upon subscription schedule creation.</p>
     */
    public function getBySchedule(string $schedule, ?\StripeSDK\GetParams\V1\SubscriptionSchedules\BySchedule $params = null): \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SCHEDULE), path: ['schedule' => $schedule], parameters: $params);
        return $result;
    }

    private const array POST_BY_SCHEDULE = [
        'method' => 'POST',
        'path' => '/v1/subscription_schedules/{schedule}',
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
            'default_settings' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
            'pause_schedules' => 'nested',
            'phases' => 'nested',
        ],
    ];

    /**
     * Update a schedule
     *
     * <p>Updates an existing subscription schedule.</p>
     */
    public function postBySchedule(string $schedule, ?\StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post $payload = null): \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Subscription\Schedule|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_SCHEDULE), path: ['schedule' => $schedule], body: $payload);
        return $result;
    }
}
