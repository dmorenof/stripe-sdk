<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Forwarding;

final class Requests extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/forwarding/requests',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Forwarding\\Requests\\GetStatus200',
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
     * List all ForwardingRequests
     *
     * <p>Lists all ForwardingRequest objects.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Forwarding\Requests $params = null): \StripeSDK\Responses\V1\Forwarding\Requests\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Forwarding\Requests\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/forwarding/requests',
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
                'type' => '\\StripeSDK\\DTOs\\Forwarding\\Request',
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
            'metadata' => 'deepObject',
            'replacements' => 'nested',
            'request' => 'nested',
        ],
    ];

    /**
     * Create a ForwardingRequest
     *
     * <p>Creates a ForwardingRequest object.</p>
     */
    public function post(\StripeSDK\Requests\V1\Forwarding\Requests\Post $payload): \StripeSDK\DTOs\Forwarding\Request|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Forwarding\Request|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/forwarding/requests/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Forwarding\\Request',
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
     * Retrieve a ForwardingRequest
     *
     * <p>Retrieves a ForwardingRequest object.</p>
     */
    public function getById(string $id, ?\StripeSDK\GetParams\V1\Forwarding\Requests\ById $params = null): \StripeSDK\DTOs\Forwarding\Request|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Forwarding\Request|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
