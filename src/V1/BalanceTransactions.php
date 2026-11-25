<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class BalanceTransactions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/balance_transactions [operationId: GetBalanceTransactions] */
    /**
     * List all balance transactions
     *
     * <p>Returns a list of transactions that have contributed to the Stripe account balance (for example, charges, transfers, and so on). The transactions return in sorted order, with the most recent transactions appearing first.</p>
     *
     * <p>The previous name of this endpoint was “Balance history,” and it used the path <code>/v1/balance/history</code>.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\BalanceTransactions $params = null): \StripeSDK\Responses\V1\BalanceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\BalanceTransactions::class)->get($params);
    }

    /** GET /v1/balance_transactions/{id} [operationId: GetBalanceTransactionsId] */
    /**
     * Retrieve a balance transaction
     *
     * <p>Retrieves the balance transaction with the given ID.</p>
     *
     * <p>Note that this endpoint previously used the path <code>/v1/balance/history/:id</code>.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\BalanceTransactions\ById $params = null): \StripeSDK\DTOs\Balance\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\BalanceTransactions::class)->getById($id, $params);
    }
}
