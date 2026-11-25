<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Terminal\Readers\ByReader;

final class CancelAction extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/terminal/readers/{reader}/cancel_action',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Terminal\\Readers\\ByReader\\CancelAction\\PostStatus200\\CancelActionPostStatus200Response',
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
     * Cancel the current reader action
     *
     * <p>Cancels the current reader action. See <a href="/docs/terminal/payments/collect-card-payment?terminal-sdk-platform=server-driven#programmatic-cancellation">Programmatic Cancellation</a> for more details.</p>
     */
    public function post(string $reader, ?\StripeSDK\Requests\V1\Terminal\Readers\ByReader\CancelAction\Post $payload = null): \StripeSDK\Responses\V1\Terminal\Readers\ByReader\CancelAction\PostStatus200\CancelActionPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Terminal\Readers\ByReader\CancelAction\PostStatus200\CancelActionPostStatus200Response|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['reader' => $reader], body: $payload);
        return $result;
    }
}
