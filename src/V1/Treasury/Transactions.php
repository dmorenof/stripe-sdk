<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury;

final class Transactions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/transactions [operationId: GetTreasuryTransactions] */
    /**
     * List all Transactions
     *
     * <p>Retrieves a list of Transaction objects.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Treasury\Transactions $params): \StripeSDK\Responses\V1\Treasury\Transactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\Transactions::class)->get($params);
    }

    /** GET /v1/treasury/transactions/{id} [operationId: GetTreasuryTransactionsId] */
    /**
     * Retrieve a Transaction
     *
     * <p>Retrieves the details of an existing Transaction.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Treasury\Transactions\ById $params = null): \StripeSDK\DTOs\Treasury\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\Transactions::class)->getById($id, $params);
    }
}
