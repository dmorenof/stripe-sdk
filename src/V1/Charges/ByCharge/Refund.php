<?php

declare(strict_types=1);

namespace StripeSDK\V1\Charges\ByCharge;

final class Refund extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/charges/{charge}/refund [operationId: PostChargesChargeRefund] */
    /**
     * Create a refund
     *
     * <p>When you create a new refund, you must specify either a Charge or a PaymentIntent object.</p>
     *
     * <p>This action refunds a previously created charge that’s not refunded yet.
     * Funds are refunded to the credit or debit card that’s originally charged.</p>
     *
     * <p>You can optionally refund only part of a charge.
     * You can repeat this until the entire charge is refunded.</p>
     *
     * <p>After you entirely refund a charge, you can’t refund it again.
     * This method raises an error when it’s called on an already-refunded charge,
     * or when you attempt to refund more money than is left on a charge.</p>
     */
    public static function post(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Refund\Post $payload = null): \StripeSDK\DTOs\Charge|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges\ByCharge\Refund::class)->post($charge, $payload);
    }
}
