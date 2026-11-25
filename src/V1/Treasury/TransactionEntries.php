<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury;

final class TransactionEntries extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/transaction_entries [operationId: GetTreasuryTransactionEntries] */
    /**
     * List all TransactionEntries
     *
     * <p>Retrieves a list of TransactionEntry objects.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Treasury\TransactionEntries $params): \StripeSDK\Responses\V1\Treasury\TransactionEntries\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\TransactionEntries::class)->get($params);
    }

    /** GET /v1/treasury/transaction_entries/{id} [operationId: GetTreasuryTransactionEntriesId] */
    /**
     * Retrieve a TransactionEntry
     *
     * <p>Retrieves a TransactionEntry object.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Treasury\TransactionEntries\ById $params = null): \StripeSDK\DTOs\Treasury\TransactionEntry|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\TransactionEntries::class)->getById($id, $params);
    }
}
