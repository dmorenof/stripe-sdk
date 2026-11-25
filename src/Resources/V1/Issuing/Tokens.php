<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Issuing;

final class Tokens extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/issuing/tokens',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Issuing\\Tokens\\GetStatus200',
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
     * List all issuing tokens for card
     *
     * <p>Lists all Issuing <code>Token</code> objects for a given card.</p>
     */
    public function get(\StripeSDK\GetParams\V1\Issuing\Tokens $params): \StripeSDK\Responses\V1\Issuing\Tokens\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Issuing\Tokens\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_TOKEN = [
        'method' => 'GET',
        'path' => '/v1/issuing/tokens/{token}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Token',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'token' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve an issuing token
     *
     * <p>Retrieves an Issuing <code>Token</code> object.</p>
     */
    public function getByToken(string $token, ?\StripeSDK\GetParams\V1\Issuing\Tokens\ByToken $params = null): \StripeSDK\DTOs\Issuing\Token|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Token|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TOKEN), path: ['token' => $token], parameters: $params);
        return $result;
    }

    private const array POST_BY_TOKEN = [
        'method' => 'POST',
        'path' => '/v1/issuing/tokens/{token}',
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
                'type' => '\\StripeSDK\\DTOs\\Issuing\\Token',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'token' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Update a token status
     *
     * <p>Attempts to update the specified Issuing <code>Token</code> object to the status specified.</p>
     */
    public function postByToken(string $token, \StripeSDK\Requests\V1\Issuing\Tokens\ByToken\Post $payload): \StripeSDK\DTOs\Issuing\Token|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Issuing\Token|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_TOKEN), path: ['token' => $token], body: $payload);
        return $result;
    }
}
