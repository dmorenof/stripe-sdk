<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Transactions;

final class CreateForceCapture extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/transactions/create_force_capture [operationId: PostTestHelpersIssuingTransactionsCreateForceCapture] */
    /**
     * Create a test-mode force capture
     *
     * <p>Allows the user to capture an arbitrary amount, also known as a forced capture.</p>
     */
    public static function post(\StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\CreateForceCapture\Post $payload): \StripeSDK\DTOs\Issuing\Transaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Transactions\CreateForceCapture::class)->post($payload);
    }
}
