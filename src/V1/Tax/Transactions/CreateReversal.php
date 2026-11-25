<?php

declare(strict_types=1);

namespace StripeSDK\V1\Tax\Transactions;

final class CreateReversal extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/tax/transactions/create_reversal [operationId: PostTaxTransactionsCreateReversal] */
    /**
     * Create a reversal Transaction
     *
     * <p>Partially or fully reverses a previously created <code>Transaction</code>.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Tax\Transactions\CreateReversal\Post $payload): \StripeSDK\DTOs\Tax\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Transactions\CreateReversal::class)->post($payload);
    }
}
