<?php

declare(strict_types=1);

namespace StripeSDK\V1\Customers\ByCustomer;

final class CashBalanceTransactions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/customers/{customer}/cash_balance_transactions [operationId: GetCustomersCustomerCashBalanceTransactions] */
    /**
     * List cash balance transactions
     *
     * <p>Returns a list of transactions that modified the customer’s <a href="/docs/payments/customer-balance">cash balance</a>.</p>
     */
    public static function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\CashBalanceTransactions $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\CashBalanceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\CashBalanceTransactions::class)->get($customer, $params);
    }

    /** GET /v1/customers/{customer}/cash_balance_transactions/{transaction} [operationId: GetCustomersCustomerCashBalanceTransactionsTransaction] */
    /**
     * Retrieve a cash balance transaction
     *
     * <p>Retrieves a specific cash balance transaction, which updated the customer’s <a href="/docs/payments/customer-balance">cash balance</a>.</p>
     */
    public static function getByTransaction(\StripeSDK\PathParams\V1\Customers\ByCustomer\CashBalanceTransactions\ByTransaction $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\CashBalanceTransactions\ByTransaction $params = null): \StripeSDK\DTOs\Customer\CashBalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Customers\ByCustomer\CashBalanceTransactions::class)->getByTransaction($identifier, $params);
    }
}
