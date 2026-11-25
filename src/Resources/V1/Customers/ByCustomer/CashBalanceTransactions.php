<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Customers\ByCustomer;

final class CashBalanceTransactions extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/cash_balance_transactions',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Customers\\ByCustomer\\CashBalanceTransactions\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List cash balance transactions
     *
     * <p>Returns a list of transactions that modified the customer’s <a href="/docs/payments/customer-balance">cash balance</a>.</p>
     */
    public function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\CashBalanceTransactions $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\CashBalanceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Customers\ByCustomer\CashBalanceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['customer' => $customer], parameters: $params);
        return $result;
    }

    private const array GET_BY_TRANSACTION = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/cash_balance_transactions/{transaction}',
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
                'type' => '\\StripeSDK\\DTOs\\Customer\\CashBalanceTransaction',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a cash balance transaction
     *
     * <p>Retrieves a specific cash balance transaction, which updated the customer’s <a href="/docs/payments/customer-balance">cash balance</a>.</p>
     */
    public function getByTransaction(\StripeSDK\PathParams\V1\Customers\ByCustomer\CashBalanceTransactions\ByTransaction $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\CashBalanceTransactions\ByTransaction $params = null): \StripeSDK\DTOs\Customer\CashBalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Customer\CashBalanceTransaction|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TRANSACTION), path: $identifier, parameters: $params);
        return $result;
    }
}
