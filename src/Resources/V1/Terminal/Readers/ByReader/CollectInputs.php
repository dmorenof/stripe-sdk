<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Terminal\Readers\ByReader;

final class CollectInputs extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/terminal/readers/{reader}/collect_inputs',
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
            'inputs' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Collect inputs using a Reader
     *
     * <p>Initiates an <a href="/docs/terminal/features/collect-inputs">input collection flow</a> on a Reader to display input forms and collect information from your customers.</p>
     */
    public function post(string $reader, \StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectInputs\Post $payload): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['reader' => $reader], body: $payload);
        return $result;
    }
}
