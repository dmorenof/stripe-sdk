<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Transactions;

final class CreateUnlinkedRefund extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/transactions/create_unlinked_refund [operationId: PostTestHelpersIssuingTransactionsCreateUnlinkedRefund] */
    /**
     * Create a test-mode unlinked refund
     *
     * <p>Allows the user to refund an arbitrary amount, also known as a unlinked refund.</p>
     */
    public static function post(\StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund\Post $payload): \StripeSDK\DTOs\Issuing\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund::class)->post($payload);
    }
}
