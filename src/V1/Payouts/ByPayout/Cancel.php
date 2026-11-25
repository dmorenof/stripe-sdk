<?php

declare(strict_types=1);

namespace StripeSDK\V1\Payouts\ByPayout;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payouts/{payout}/cancel [operationId: PostPayoutsPayoutCancel] */
    /**
     * Cancel a payout
     *
     * <p>You can cancel a previously created payout if its status is <code>pending</code>. Stripe refunds the funds to your available balance. You can’t cancel automatic Stripe payouts.</p>
     */
    public static function post(string $payout, ?\StripeSDK\Requests\V1\Payouts\ByPayout\Cancel\Post $payload = null): \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Payouts\ByPayout\Cancel::class)->post($payout, $payload);
    }
}
