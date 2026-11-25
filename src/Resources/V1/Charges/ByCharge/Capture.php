<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Charges\ByCharge;

final class Capture extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/charges/{charge}/capture',
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
                'type' => '\\StripeSDK\\DTOs\\Charge',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'charge' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

    /**
     * Capture a charge
     *
     * <p>This method is deprecated and will be removed soon. If your integration uses it, you need to update it to use a different payment flow, such as <a href="/docs/payments/payment-intents">the Payment Intents API</a>.</p>
     */
    public function post(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Capture\Post $payload = null): \StripeSDK\DTOs\Charge|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Charge|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['charge' => $charge], body: $payload);
        return $result;
    }
}
