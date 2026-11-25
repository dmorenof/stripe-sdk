<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class PaymentIntents extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/payment_intents [operationId: GetPaymentIntents] */
    /**
     * List all PaymentIntents
     *
     * <p>Returns a list of PaymentIntents.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\PaymentIntents $params = null): \StripeSDK\Responses\V1\PaymentIntents\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentIntents::class)->get($params);
    }

    /** POST /v1/payment_intents [operationId: PostPaymentIntents] */
    /**
     * Create a PaymentIntent
     *
     * <p>Creates a PaymentIntent object.</p>
     *
     * <p>After the PaymentIntent is created, attach a payment method and <a href="/docs/api/payment_intents/confirm">confirm</a>
     * to continue the payment. Learn more about <a href="/docs/payments/payment-intents">the available payment flows
     * with the Payment Intents API</a>.</p>
     *
     * <p>When you use <code>confirm=true</code> during creation, it’s equivalent to creating
     * and confirming the PaymentIntent in the same call. You can use any parameters
     * available in the <a href="/docs/api/payment_intents/confirm">confirm API</a> when you supply
     * <code>confirm=true</code>.</p>
     */
    public static function post(\StripeSDK\Requests\V1\PaymentIntents\Post $payload): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentIntents::class)->post($payload);
    }

    /** GET /v1/payment_intents/{intent} [operationId: GetPaymentIntentsIntent] */
    /**
     * Retrieve a PaymentIntent
     *
     * <p>Retrieves the details of a PaymentIntent that has previously been created. </p>
     *
     * <p>You can retrieve a PaymentIntent client-side using a publishable key when the <code>client_secret</code> is in the query string. </p>
     *
     * <p>If you retrieve a PaymentIntent with a publishable key, it only returns a subset of properties. Refer to the <a href="/api/payment_intents/object">payment intent</a> object reference for more details.</p>
     */
    public static function getByIntent(string $intent, ?\StripeSDK\GetParams\V1\PaymentIntents\ByIntent $params = null): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentIntents::class)->getByIntent($intent, $params);
    }

    /** POST /v1/payment_intents/{intent} [operationId: PostPaymentIntentsIntent] */
    /**
     * Update a PaymentIntent
     *
     * <p>Updates properties on a PaymentIntent object without confirming.</p>
     *
     * <p>Depending on which properties you update, you might need to confirm the
     * PaymentIntent again. For example, updating the <code>payment_method</code>
     * always requires you to confirm the PaymentIntent again. If you prefer to
     * update and confirm at the same time, we recommend updating properties through
     * the <a href="/docs/api/payment_intents/confirm">confirm API</a> instead.</p>
     */
    public static function postByIntent(string $intent, ?\StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post $payload = null): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentIntents::class)->postByIntent($intent, $payload);
    }
}
