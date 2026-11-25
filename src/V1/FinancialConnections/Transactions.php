<?php

declare(strict_types=1);

namespace StripeSDK\V1\FinancialConnections;

final class Transactions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/financial_connections/transactions [operationId: GetFinancialConnectionsTransactions] */
    /**
     * List Transactions
     *
     * <p>Returns a list of Financial Connections <code>Transaction</code> objects.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\FinancialConnections\Transactions $params): \StripeSDK\Responses\V1\FinancialConnections\Transactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FinancialConnections\Transactions::class)->get($params);
    }

    /** GET /v1/financial_connections/transactions/{transaction} [operationId: GetFinancialConnectionsTransactionsTransaction] */
    /**
     * Retrieve a Transaction
     *
     * <p>Retrieves the details of a Financial Connections <code>Transaction</code></p>
     */
    public static function getByTransaction(string $transaction, ?\StripeSDK\GetParams\V1\FinancialConnections\Transactions\ByTransaction $params = null): \StripeSDK\DTOs\FinancialConnections\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FinancialConnections\Transactions::class)->getByTransaction($transaction, $params);
    }
}
