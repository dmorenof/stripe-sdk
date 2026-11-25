<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\PaymentMethods\ByPaymentMethod;

final class Detach extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_methods/{payment_method}/detach',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Method',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'payment_method' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Detach a PaymentMethod from a Customer
     *
     * <p>Detaches a PaymentMethod object from a Customer. Detachment is permanent and irreversible — once detached, a PaymentMethod can no longer be used for payments or re-attached to a Customer.</p>
     */
    public function post(string $payment_method, ?\StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Detach\Post $payload = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['payment_method' => $payment_method], body: $payload);
        return $result;
    }
}
