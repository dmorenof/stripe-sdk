<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury;

final class ReceivedDebits extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/received_debits [operationId: PostTestHelpersTreasuryReceivedDebits] */
    /**
     * Test mode: Create a ReceivedDebit
     *
     * <p>Use this endpoint to simulate a test mode ReceivedDebit initiated by a third party. In live mode, you can’t directly create ReceivedDebits initiated by third parties.</p>
     */
    public static function post(\StripeSDK\Requests\V1\TestHelpers\Treasury\ReceivedDebits\Post $payload): \StripeSDK\DTOs\Treasury\ReceivedDebit|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\ReceivedDebits::class)->post($payload);
    }
}
