<?php

declare(strict_types=1);

namespace StripeSDK\V1\Refunds\ByRefund;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/refunds/{refund}/cancel [operationId: PostRefundsRefundCancel] */
    /**
     * Cancel a refund
     *
     * <p>Cancels a refund with a status of <code>requires_action</code>.</p>
     *
     * <p>You can’t cancel refunds in other states. Only refunds for payment methods that require customer action can enter the <code>requires_action</code> state.</p>
     */
    public static function post(string $refund, ?\StripeSDK\Requests\V1\Refunds\ByRefund\Cancel\Post $payload = null): \StripeSDK\DTOs\Refund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Refunds\ByRefund\Cancel::class)->post($refund, $payload);
    }
}
