<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentIntents\ByIntent;

final class ApplyCustomerBalance extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_intents/{intent}/apply_customer_balance [operationId: PostPaymentIntentsIntentApplyCustomerBalance] */
    /**
     * Reconcile a customer_balance PaymentIntent
     *
     * <p>Manually reconcile the remaining amount for a <code>customer_balance</code> PaymentIntent.</p>
     */
    public static function post(string $intent, ?\StripeSDK\Requests\V1\PaymentIntents\ByIntent\ApplyCustomerBalance\Post $payload = null): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentIntents\ByIntent\ApplyCustomerBalance::class)->post($intent, $payload);
    }
}
