<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Charges\ByCharge;

final class Refund extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/charges/{charge}/refund',
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
            'metadata' => 'nested',
        ],
    ];

    /**
     * Create a refund
     *
     * <p>When you create a new refund, you must specify either a Charge or a PaymentIntent object.</p>
     *
     * <p>This action refunds a previously created charge that’s not refunded yet.
     * Funds are refunded to the credit or debit card that’s originally charged.</p>
     *
     * <p>You can optionally refund only part of a charge.
     * You can repeat this until the entire charge is refunded.</p>
     *
     * <p>After you entirely refund a charge, you can’t refund it again.
     * This method raises an error when it’s called on an already-refunded charge,
     * or when you attempt to refund more money than is left on a charge.</p>
     */
    public function post(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Refund\Post $payload = null): \StripeSDK\DTOs\Charge|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Charge|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['charge' => $charge], body: $payload);
        return $result;
    }
}
