<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers;

final class ConfirmationTokens extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/confirmation_tokens',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'payment_method_data' => 'nested',
            'payment_method_options' => 'nested',
            'shipping' => 'nested',
        ],
    ];

    /**
     * Create a test Confirmation Token
     *
     * <p>Creates a test mode Confirmation Token server side for your integration tests.</p>
     */
    public function post(?\StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post $payload = null): \StripeSDK\DTOs\ConfirmationToken|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ConfirmationToken|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
