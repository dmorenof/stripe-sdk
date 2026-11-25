<?php

declare(strict_types=1);

namespace StripeSDK\V1\Sources\BySource;

final class SourceTransactions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/sources/{source}/source_transactions [operationId: GetSourcesSourceSourceTransactions] */
    /**
     * <p>List source transactions for a given source.</p>
     */
    public static function get(string $source, ?\StripeSDK\GetParams\V1\Sources\BySource\SourceTransactions $params = null): \StripeSDK\Responses\V1\Sources\BySource\SourceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Sources\BySource\SourceTransactions::class)->get($source, $params);
    }

    /** GET /v1/sources/{source}/source_transactions/{source_transaction} [operationId: GetSourcesSourceSourceTransactionsSourceTransaction] */
    /**
     * Retrieve a source transaction
     *
     * <p>Retrieve an existing source transaction object. Supply the unique source ID from a source creation request and the source transaction ID and Stripe will return the corresponding up-to-date source object information.</p>
     */
    public static function getBySourceTransaction(\StripeSDK\PathParams\V1\Sources\BySource\SourceTransactions\BySourceTransaction $identifier, ?\StripeSDK\GetParams\V1\Sources\BySource\SourceTransactions\BySourceTransaction $params = null): \StripeSDK\DTOs\Source\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Sources\BySource\SourceTransactions::class)->getBySourceTransaction($identifier, $params);
    }
}
