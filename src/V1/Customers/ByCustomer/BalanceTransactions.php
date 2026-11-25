<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class BalanceTransactions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/customers/{customer}/balance_transactions [operationId: GetCustomersCustomerBalanceTransactions] */
    /**
     * List customer balance transactions
     *
     * <p>Returns a list of transactions that updated the customer’s <a href="/docs/billing/customer/balance">balances</a>.</p>
     */
    public static function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\BalanceTransactions $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\BalanceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\BalanceTransactions::class)->get($customer, $params);
    }

    /** POST /v1/customers/{customer}/balance_transactions [operationId: PostCustomersCustomerBalanceTransactions] */
    /**
     * Create a customer balance transaction
     *
     * <p>Creates an immutable transaction that updates the customer’s credit <a href="/docs/billing/customer/balance">balance</a>.</p>
     */
    public static function post(string $customer, \StripeSDK\Requests\V1\Customers\ByCustomer\BalanceTransactions\Post $payload): \StripeSDK\DTOs\Customer\BalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\BalanceTransactions::class)->post($customer, $payload);
    }

    /** GET /v1/customers/{customer}/balance_transactions/{transaction} [operationId: GetCustomersCustomerBalanceTransactionsTransaction] */
    /**
     * Retrieve a customer balance transaction
     *
     * <p>Retrieves a specific customer balance transaction that updated the customer’s <a href="/docs/billing/customer/balance">balances</a>.</p>
     */
    public static function getByTransaction(\StripeSDK\PathParams\V1\Customers\ByCustomer\BalanceTransactions\ByTransaction $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\BalanceTransactions\ByTransaction $params = null): \StripeSDK\DTOs\Customer\BalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\BalanceTransactions::class)->getByTransaction($identifier, $params);
    }

    /** POST /v1/customers/{customer}/balance_transactions/{transaction} [operationId: PostCustomersCustomerBalanceTransactionsTransaction] */
    /**
     * Update a customer credit balance transaction
     *
     * <p>Most credit balance transaction fields are immutable, but you may update its <code>description</code> and <code>metadata</code>.</p>
     */
    public static function postByTransaction(\StripeSDK\PathParams\V1\Customers\ByCustomer\BalanceTransactions\ByTransaction $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\BalanceTransactions\ByTransaction\Post $payload = null): \StripeSDK\DTOs\Customer\BalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\BalanceTransactions::class)->postByTransaction($identifier, $payload);
    }
}
