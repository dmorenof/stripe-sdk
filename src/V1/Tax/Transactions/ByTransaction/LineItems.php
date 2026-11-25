<?php

declare(strict_types=1);

namespace StripeSDK\V1\Tax\Transactions\ByTransaction;

final class LineItems extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/tax/transactions/{transaction}/line_items [operationId: GetTaxTransactionsTransactionLineItems] */
    /**
     * Retrieve a Transaction's line items
     *
     * <p>Retrieves the line items of a committed standalone transaction as a collection.</p>
     */
    public static function get(string $transaction, ?\StripeSDK\GetParams\V1\Tax\Transactions\ByTransaction\LineItems $params = null): \StripeSDK\Responses\V1\Tax\Transactions\ByTransaction\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Transactions\ByTransaction\LineItems::class)->get($transaction, $params);
    }
}
