<?php

declare(strict_types=1);

namespace StripeSDK\V1\Payouts\ByPayout;

final class Reverse extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payouts/{payout}/reverse [operationId: PostPayoutsPayoutReverse] */
    /**
     * Reverse a payout
     *
     * <p>Reverses a payout by debiting the destination bank account. At this time, you can only reverse payouts for connected accounts to US and Canadian bank accounts. If the payout is manual and in the <code>pending</code> status, use <code>/v1/payouts/:id/cancel</code> instead.</p>
     *
     * <p>By requesting a reversal through <code>/v1/payouts/:id/reverse</code>, you confirm that the authorized signatory of the selected bank account authorizes the debit on the bank account and that no other authorization is required.</p>
     */
    public static function post(string $payout, ?\StripeSDK\Requests\V1\Payouts\ByPayout\Reverse\Post $payload = null): \StripeSDK\DTOs\Payout|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Payouts\ByPayout\Reverse::class)->post($payout, $payload);
    }
}
