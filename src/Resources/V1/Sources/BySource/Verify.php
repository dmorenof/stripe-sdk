<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Sources\BySource;

final class Verify extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/sources/{source}/verify',
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
                'type' => '\\StripeSDK\\DTOs\\Source',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'source' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'values' => 'nested',
        ],
    ];

    /**
     * <p>Verify a given source.</p>
     */
    public function post(string $source, \StripeSDK\Requests\V1\Sources\BySource\Verify\Post $payload): \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['source' => $source], body: $payload);
        return $result;
    }
}
