<?php

declare(strict_types=1);

namespace StripeSDK\V1\Tax\Transactions;

final class CreateFromCalculation extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/tax/transactions/create_from_calculation [operationId: PostTaxTransactionsCreateFromCalculation] */
    /**
     * Create a Transaction from a Calculation
     *
     * <p>Creates a Tax Transaction from a calculation, if that calculation hasn’t expired. Calculations expire after 90 days.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Tax\Transactions\CreateFromCalculation\Post $payload): \StripeSDK\DTOs\Tax\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Transactions\CreateFromCalculation::class)->post($payload);
    }
}
