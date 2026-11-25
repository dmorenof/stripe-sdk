<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Tax\Transactions;

final class CreateReversal extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/tax/transactions/create_reversal',
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
                'type' => '\\StripeSDK\\DTOs\\Tax\\Transaction',
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
            'line_items' => 'nested',
            'metadata' => 'deepObject',
            'shipping_cost' => 'nested',
        ],
    ];

    /**
     * Create a reversal Transaction
     *
     * <p>Partially or fully reverses a previously created <code>Transaction</code>.</p>
     */
    public function post(\StripeSDK\Requests\V1\Tax\Transactions\CreateReversal\Post $payload): \StripeSDK\DTOs\Tax\Transaction|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Tax\Transaction|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }
}
