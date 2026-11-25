<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentIntents\ByIntent;

final class Capture extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_intents/{intent}/capture [operationId: PostPaymentIntentsIntentCapture] */
    /**
     * Capture a PaymentIntent
     *
     * <p>Capture the funds of an existing uncaptured PaymentIntent when its status is <code>requires_capture</code>.</p>
     *
     * <p>Uncaptured PaymentIntents are cancelled a set number of days (7 by default) after their creation.</p>
     *
     * <p>Learn more about <a href="/docs/payments/capture-later">separate authorization and capture</a>.</p>
     */
    public static function post(string $intent, ?\StripeSDK\Requests\V1\PaymentIntents\ByIntent\Capture\Post $payload = null): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentIntents\ByIntent\Capture::class)->post($intent, $payload);
    }
}
