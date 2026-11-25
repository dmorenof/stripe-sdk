<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentIntents\ByIntent;

final class VerifyMicrodeposits extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_intents/{intent}/verify_microdeposits [operationId: PostPaymentIntentsIntentVerifyMicrodeposits] */
    /**
     * Verify microdeposits on a PaymentIntent
     *
     * <p>Verifies microdeposits on a PaymentIntent object.</p>
     */
    public static function post(string $intent, ?\StripeSDK\Requests\V1\PaymentIntents\ByIntent\VerifyMicrodeposits\Post $payload = null): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentIntents\ByIntent\VerifyMicrodeposits::class)->post($intent, $payload);
    }
}
