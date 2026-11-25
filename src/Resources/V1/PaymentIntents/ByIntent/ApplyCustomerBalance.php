<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\PaymentIntents\ByIntent;

final class ApplyCustomerBalance extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_intents/{intent}/apply_customer_balance',
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
            'expand' => 'nested',
        ],
    ];

    /**
     * Reconcile a customer_balance PaymentIntent
     *
     * <p>Manually reconcile the remaining amount for a <code>customer_balance</code> PaymentIntent.</p>
     */
    public function post(string $intent, ?\StripeSDK\Requests\V1\PaymentIntents\ByIntent\ApplyCustomerBalance\Post $payload = null): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['intent' => $intent], body: $payload);
        return $result;
    }
}
