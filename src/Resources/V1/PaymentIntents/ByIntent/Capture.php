<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\PaymentIntents\ByIntent;

final class Capture extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_intents/{intent}/capture',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Intent',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'intent' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'amount_details' => 'nested',
            'expand' => 'nested',
            'hooks' => 'nested',
            'metadata' => 'nested',
            'payment_details' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

    /**
     * Capture a PaymentIntent
     *
     * <p>Capture the funds of an existing uncaptured PaymentIntent when its status is <code>requires_capture</code>.</p>
     *
     * <p>Uncaptured PaymentIntents are cancelled a set number of days (7 by default) after their creation.</p>
     *
     * <p>Learn more about <a href="/docs/payments/capture-later">separate authorization and capture</a>.</p>
     */
    public function post(string $intent, ?\StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post $payload = null): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['intent' => $intent], body: $payload);
        return $result;
    }
}
