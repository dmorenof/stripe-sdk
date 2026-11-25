<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Refunds\ByRefund;

final class Expire extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/refunds/{refund}/expire [operationId: PostTestHelpersRefundsRefundExpire] */
    /**
     * Expire a pending refund.
     *
     * <p>Expire a refund with a status of <code>requires_action</code>.</p>
     */
    public static function post(string $refund, ?\StripeSDK\Requests\V1\TestHelpers\Refunds\ByRefund\Expire\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Refunds\ByRefund\Expire::class)->post($refund, $payload);
    }
}
