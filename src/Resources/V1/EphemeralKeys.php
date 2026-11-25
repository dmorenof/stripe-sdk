<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class EphemeralKeys extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/ephemeral_keys',
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
                'type' => '\\StripeSDK\\DTOs\\EphemeralKey',
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
        ],
    ];

    /**
     * Create an ephemeral key
     *
     * <p>Creates a short-lived API key for a given resource.</p>
     */
    public function post(?\StripeSDK\Requests\V1\EphemeralKeys\Post $payload = null): \StripeSDK\DTOs\EphemeralKey|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\EphemeralKey|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_KEY = [
        'method' => 'DELETE',
        'path' => '/v1/ephemeral_keys/{key}',
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
                'type' => '\\StripeSDK\\DTOs\\EphemeralKey',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'key' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Immediately invalidate an ephemeral key
     *
     * <p>Invalidates a short-lived API key for a given resource.</p>
     */
    public function deleteByKey(string $key, ?\StripeSDK\Requests\V1\EphemeralKeys\ByKey\Delete $payload = null): \StripeSDK\DTOs\EphemeralKey|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\EphemeralKey|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_KEY), path: ['key' => $key], body: $payload);
        return $result;
    }
}
