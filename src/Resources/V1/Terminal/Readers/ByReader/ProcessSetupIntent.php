<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Terminal\Readers\ByReader;

final class ProcessSetupIntent extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/terminal/readers/{reader}/process_setup_intent',
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
            'process_config' => 'nested',
        ],
    ];

    /**
     * Hand-off a SetupIntent to a Reader
     *
     * <p>Initiates a SetupIntent flow on a Reader. See <a href="/docs/terminal/features/saving-payment-details/save-directly">Save directly without charging</a> for more details.</p>
     */
    public function post(string $reader, \StripeSDK\Requests\V1\Terminal\Readers\ByReader\ProcessSetupIntent\Post $payload): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['reader' => $reader], body: $payload);
        return $result;
    }
}
