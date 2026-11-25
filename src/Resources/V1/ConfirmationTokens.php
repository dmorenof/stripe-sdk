<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class ConfirmationTokens extends \StripeSDK\Client
{
    private const array GET_BY_CONFIRMATION_TOKEN = [
        'method' => 'GET',
        'path' => '/v1/confirmation_tokens/{confirmation_token}',
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
                'type' => '\\StripeSDK\\DTOs\\ConfirmationToken',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'confirmation_token' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a ConfirmationToken
     *
     * <p>Retrieves an existing ConfirmationToken object</p>
     */
    public function getByConfirmationToken(string $confirmation_token, ?\StripeSDK\GetParams\V1\ConfirmationTokens\ByConfirmationToken $params = null): \StripeSDK\DTOs\ConfirmationToken|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ConfirmationToken|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CONFIRMATION_TOKEN), path: ['confirmation_token' => $confirmation_token], parameters: $params);
        return $result;
    }
}
