<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Sigma;

final class SavedQueries extends \StripeSDK\Client
{
    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/sigma/saved_queries/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Sigma\\SigmaApiQuery',
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
     * Update an existing Sigma Query
     *
     * <p>Update an existing Sigma query that previously exists</p>
     */
    public function postById(string $id, ?\StripeSDK\Requests\V1\Sigma\SavedQueries\ById\Post $payload = null): \StripeSDK\DTOs\Sigma\SigmaApiQuery|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Sigma\SigmaApiQuery|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: ['id' => $id], body: $payload);
        return $result;
    }
}
