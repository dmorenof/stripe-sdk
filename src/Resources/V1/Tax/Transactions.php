<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Tax;

final class Transactions extends \StripeSDK\Client
{
    private const array GET_BY_TRANSACTION = [
        'method' => 'GET',
        'path' => '/v1/tax/transactions/{transaction}',
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
     * Retrieve a Transaction
     *
     * <p>Retrieves a Tax <code>Transaction</code> object.</p>
     */
    public function getByTransaction(string $transaction, ?\StripeSDK\GetParams\V1\Tax\Transactions\ByTransaction $params = null): \StripeSDK\DTOs\Tax\Transaction|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Tax\Transaction|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TRANSACTION), path: ['transaction' => $transaction], parameters: $params);
        return $result;
    }
}
