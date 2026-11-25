<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class BalanceTransactions extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/balance_transactions',
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
                'type' => '\\StripeSDK\\Responses\\V1\\BalanceTransactions\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all balance transactions
     *
     * <p>Returns a list of transactions that have contributed to the Stripe account balance (for example, charges, transfers, and so on). The transactions return in sorted order, with the most recent transactions appearing first.</p>
     *
     * <p>The previous name of this endpoint was “Balance history,” and it used the path <code>/v1/balance/history</code>.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\BalanceTransactions $params = null): \StripeSDK\Responses\V1\BalanceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\BalanceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/balance_transactions/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Balance\\Transaction',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a balance transaction
     *
     * <p>Retrieves the balance transaction with the given ID.</p>
     *
     * <p>Note that this endpoint previously used the path <code>/v1/balance/history/:id</code>.</p>
     */
    public function getById(string $id, ?\StripeSDK\GetParams\V1\BalanceTransactions\ById $params = null): \StripeSDK\DTOs\Balance\Transaction|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Balance\Transaction|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }
}
