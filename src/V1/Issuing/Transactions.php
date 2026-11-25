<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing;

final class Transactions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/issuing/transactions [operationId: GetIssuingTransactions] */
    /**
     * List all transactions
     *
     * <p>Returns a list of Issuing <code>Transaction</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Issuing\Transactions $params = null): \StripeSDK\Responses\V1\Issuing\Transactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Transactions::class)->get($params);
    }

    /** GET /v1/issuing/transactions/{transaction} [operationId: GetIssuingTransactionsTransaction] */
    /**
     * Retrieve a transaction
     *
     * <p>Retrieves an Issuing <code>Transaction</code> object.</p>
     */
    public static function getByTransaction(string $transaction, ?\StripeSDK\GetParams\V1\Issuing\Transactions\ByTransaction $params = null): \StripeSDK\DTOs\Issuing\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Transactions::class)->getByTransaction($transaction, $params);
    }

    /** POST /v1/issuing/transactions/{transaction} [operationId: PostIssuingTransactionsTransaction] */
    /**
     * Update a transaction
     *
     * <p>Updates the specified Issuing <code>Transaction</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public static function postByTransaction(string $transaction, ?\StripeSDK\Requests\V1\Issuing\Transactions\ByTransaction\Post $payload = null): \StripeSDK\DTOs\Issuing\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Transactions::class)->postByTransaction($transaction, $payload);
    }
}
