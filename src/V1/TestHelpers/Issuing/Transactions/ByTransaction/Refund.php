<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Transactions\ByTransaction;

final class Refund extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/transactions/{transaction}/refund [operationId: PostTestHelpersIssuingTransactionsTransactionRefund] */
    /**
     * Refund a test-mode transaction
     *
     * <p>Refund a test-mode Transaction.</p>
     */
    public static function post(string $transaction, ?\StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\ByTransaction\Refund\Post $payload = null): \StripeSDK\DTOs\Issuing\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Transactions\ByTransaction\Refund::class)->post($transaction, $payload);
    }
}
