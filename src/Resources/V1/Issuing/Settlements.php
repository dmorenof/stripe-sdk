<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Issuing;

final class Settlements extends \StripeSDK\Client
{
    private const array GET_BY_SETTLEMENT = [
        'method' => 'GET',
        'path' => '/v1/issuing/settlements/{settlement}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Settlement',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'settlement' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a settlement
     *
     * <p>Retrieves an Issuing <code>Settlement</code> object.</p>
     */
    public function getBySettlement(string $settlement, ?\StripeSDK\GetParams\V1\Issuing\Settlements\BySettlement $params = null): \StripeSDK\DTOs\Issuing\Settlement|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Settlement|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SETTLEMENT), path: ['settlement' => $settlement], parameters: $params);
        return $result;
    }

    private const array POST_BY_SETTLEMENT = [
        'method' => 'POST',
        'path' => '/v1/issuing/settlements/{settlement}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Settlement',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'settlement' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Update a settlement
     *
     * <p>Updates the specified Issuing <code>Settlement</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public function postBySettlement(string $settlement, ?\StripeSDK\Requests\V1\Issuing\Settlements\BySettlement\Post $payload = null): \StripeSDK\DTOs\Issuing\Settlement|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Settlement|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_SETTLEMENT), path: ['settlement' => $settlement], body: $payload);
        return $result;
    }
}
