<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Plans extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/plans',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Plans\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all plans
     *
     * <p>Returns a list of your plans.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Plans $params = null): \StripeSDK\Responses\V1\Plans\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Plans\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/plans',
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
                'type' => '\\StripeSDK\\DTOs\\Plan',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
            'product' => 'nested',
            'tiers' => 'nested',
            'transform_usage' => 'nested',
        ],
    ];

    /**
     * Create a plan
     *
     * <p>You can now model subscriptions more flexibly using the <a href="#prices">Prices API</a>. It replaces the Plans API and is backwards compatible to simplify your migration.</p>
     */
    public function post(\StripeSDK\Requests\V1\Plans\Post $payload): \StripeSDK\DTOs\Plan|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Plan|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_PLAN = [
        'method' => 'DELETE',
        'path' => '/v1/plans/{plan}',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\Plan',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'plan' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a plan
     *
     * <p>Deleting plans means new subscribers can’t be added. Existing subscribers aren’t affected.</p>
     */
    public function deleteByPlan(string $plan, ?\StripeSDK\Requests\V1\Plans\ByPlan\Delete $payload = null): \StripeSDK\DTOs\Deleted\Plan|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\Plan|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_PLAN), path: ['plan' => $plan], body: $payload);
        return $result;
    }

    private const array GET_BY_PLAN = [
        'method' => 'GET',
        'path' => '/v1/plans/{plan}',
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
                'type' => '\\StripeSDK\\DTOs\\Plan',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'plan' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a plan
     *
     * <p>Retrieves the plan with the given ID.</p>
     */
    public function getByPlan(string $plan, ?\StripeSDK\GetParams\V1\Plans\ByPlan $params = null): \StripeSDK\DTOs\Plan|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Plan|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PLAN), path: ['plan' => $plan], parameters: $params);
        return $result;
    }

    private const array POST_BY_PLAN = [
        'method' => 'POST',
        'path' => '/v1/plans/{plan}',
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
                'type' => '\\StripeSDK\\DTOs\\Plan',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'plan' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Update a plan
     *
     * <p>Updates the specified plan by setting the values of the parameters passed. Any parameters not provided are left unchanged. By design, you cannot change a plan’s ID, amount, currency, or billing cycle.</p>
     */
    public function postByPlan(string $plan, ?\StripeSDK\Requests\V1\Plans\ByPlan\Post $payload = null): \StripeSDK\DTOs\Plan|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Plan|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_PLAN), path: ['plan' => $plan], body: $payload);
        return $result;
    }
}
