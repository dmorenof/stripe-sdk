<?php

declare(strict_types=1);

namespace StripeSDK\V1\Tax;

final class Transactions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/tax/transactions/{transaction} [operationId: GetTaxTransactionsTransaction] */
    /**
     * Retrieve a Transaction
     *
     * <p>Retrieves a Tax <code>Transaction</code> object.</p>
     */
    public static function getByTransaction(string $transaction, ?\StripeSDK\GetParams\V1\Tax\Transactions\ByTransaction $params = null): \StripeSDK\DTOs\Tax\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Transactions::class)->getByTransaction($transaction, $params);
    }
}
