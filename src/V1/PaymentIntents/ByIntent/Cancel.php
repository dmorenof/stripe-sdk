<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentIntents\ByIntent;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_intents/{intent}/cancel [operationId: PostPaymentIntentsIntentCancel] */
    /**
     * Cancel a PaymentIntent
     *
     * <p>You can cancel a PaymentIntent object when it’s in one of these statuses: <code>requires_payment_method</code>, <code>requires_capture</code>, <code>requires_confirmation</code>, <code>requires_action</code> or, <a href="/docs/payments/intents">in rare cases</a>, <code>processing</code>. </p>
     *
     * <p>After it’s canceled, no additional charges are made by the PaymentIntent and any operations on the PaymentIntent fail with an error. For PaymentIntents with a <code>status</code> of <code>requires_capture</code>, the remaining <code>amount_capturable</code> is automatically refunded. </p>
     *
     * <p>You can directly cancel the PaymentIntent for a Checkout Session only when the PaymentIntent has a status of <code>requires_capture</code>. Otherwise, you must <a href="/docs/api/checkout/sessions/expire">expire the Checkout Session</a>.</p>
     */
    public static function post(string $intent, ?\StripeSDK\Requests\V1\PaymentIntents\ByIntent\Cancel\Post $payload = null): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentIntents\ByIntent\Cancel::class)->post($intent, $payload);
    }
}
