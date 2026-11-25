<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Customers\ByCustomer;

final class BalanceTransactions extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/balance_transactions',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Customers\\ByCustomer\\BalanceTransactions\\GetStatus200',
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
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List customer balance transactions
     *
     * <p>Returns a list of transactions that updated the customer’s <a href="/docs/billing/customer/balance">balances</a>.</p>
     */
    public function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\BalanceTransactions $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\BalanceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Customers\ByCustomer\BalanceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['customer' => $customer], parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/customers/{customer}/balance_transactions',
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
                'type' => '\\StripeSDK\\DTOs\\Customer\\BalanceTransaction',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Create a customer balance transaction
     *
     * <p>Creates an immutable transaction that updates the customer’s credit <a href="/docs/billing/customer/balance">balance</a>.</p>
     */
    public function post(string $customer, \StripeSDK\Requests\V1\Customers\ByCustomer\BalanceTransactions\Post $payload): \StripeSDK\DTOs\Customer\BalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Customer\BalanceTransaction|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['customer' => $customer], body: $payload);
        return $result;
    }

    private const array GET_BY_TRANSACTION = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/balance_transactions/{transaction}',
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
                'type' => '\\StripeSDK\\DTOs\\Customer\\BalanceTransaction',
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
     * Retrieve a customer balance transaction
     *
     * <p>Retrieves a specific customer balance transaction that updated the customer’s <a href="/docs/billing/customer/balance">balances</a>.</p>
     */
    public function getByTransaction(\StripeSDK\PathParams\V1\Customers\ByCustomer\BalanceTransactions\ByTransaction $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\BalanceTransactions\ByTransaction $params = null): \StripeSDK\DTOs\Customer\BalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Customer\BalanceTransaction|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_TRANSACTION), path: $identifier, parameters: $params);
        return $result;
    }

    private const array POST_BY_TRANSACTION = [
        'method' => 'POST',
        'path' => '/v1/customers/{customer}/balance_transactions/{transaction}',
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
                'type' => '\\StripeSDK\\DTOs\\Customer\\BalanceTransaction',
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
            'transaction' => [
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
     * Update a customer credit balance transaction
     *
     * <p>Most credit balance transaction fields are immutable, but you may update its <code>description</code> and <code>metadata</code>.</p>
     */
    public function postByTransaction(\StripeSDK\PathParams\V1\Customers\ByCustomer\BalanceTransactions\ByTransaction $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\BalanceTransactions\ByTransaction\Post $payload = null): \StripeSDK\DTOs\Customer\BalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Customer\BalanceTransaction|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_TRANSACTION), path: $identifier, body: $payload);
        return $result;
    }
}
