<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Tax\Transactions\ByTransaction;

final class LineItems extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/tax/transactions/{transaction}/line_items',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Tax\\Transactions\\ByTransaction\\LineItems\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'transaction' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a Transaction's line items
     *
     * <p>Retrieves the line items of a committed standalone transaction as a collection.</p>
     */
    public function get(string $transaction, ?\StripeSDK\GetParams\V1\Tax\Transactions\ByTransaction\LineItems $params = null): \StripeSDK\Responses\V1\Tax\Transactions\ByTransaction\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Tax\Transactions\ByTransaction\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['transaction' => $transaction], parameters: $params);
        return $result;
    }
}
