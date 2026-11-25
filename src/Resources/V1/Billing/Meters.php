<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Billing;

final class Meters extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/billing/meters',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Billing\\Meters\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List billing meters
     *
     * <p>Retrieve a list of billing meters.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Billing\Meters $params = null): \StripeSDK\Responses\V1\Billing\Meters\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Billing\Meters\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/billing/meters',
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
                'type' => '\\StripeSDK\\DTOs\\Billing\\Meter',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'customer_mapping' => 'nested',
            'default_aggregation' => 'nested',
            'expand' => 'nested',
            'value_settings' => 'nested',
        ],
    ];

    /**
     * Create a billing meter
     *
     * <p>Creates a billing meter.</p>
     */
    public function post(\StripeSDK\Requests\V1\Billing\Meters\Post $payload): \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/billing/meters/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Billing\\Meter',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a billing meter
     *
     * <p>Retrieves a billing meter given an ID.</p>
     */
    public function getById(string $id, ?\StripeSDK\GetParams\V1\Billing\Meters\ById $params = null): \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/billing/meters/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Billing\\Meter',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Update a billing meter
     *
     * <p>Updates a billing meter.</p>
     */
    public function postById(string $id, ?\StripeSDK\Requests\V1\Billing\Meters\ById\Post $payload = null): \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: ['id' => $id], body: $payload);
        return $result;
    }
}
