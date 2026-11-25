<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\TestHelpers\Terminal\Readers\ByReader;

final class TimeoutInputCollection extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/test_helpers/terminal/readers/{reader}/timeout_input_collection',
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
                'type' => '\\StripeSDK\\DTOs\\Terminal\\Reader',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'reader' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Simulate an input collection timeout
     *
     * <p>Use this endpoint to complete an input collection with a timeout error on a simulated reader.</p>
     */
    public function post(string $reader, ?\StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\TimeoutInputCollection\Post $payload = null): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['reader' => $reader], body: $payload);
        return $result;
    }
}
