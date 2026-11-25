<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Treasury;

final class ReceivedCredits extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/treasury/received_credits [operationId: PostTestHelpersTreasuryReceivedCredits] */
    /**
     * Test mode: Create a ReceivedCredit
     *
     * <p>Use this endpoint to simulate a test mode ReceivedCredit initiated by a third party. In live mode, you can’t directly create ReceivedCredits initiated by third parties.</p>
     */
    public static function post(\StripeSDK\Requests\V1\TestHelpers\Treasury\ReceivedCredits\Post $payload): \StripeSDK\DTOs\Treasury\ReceivedCredit|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Treasury\ReceivedCredits::class)->post($payload);
    }
}
