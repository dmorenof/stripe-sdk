<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class PaymentMethods extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/payment_methods [operationId: GetPaymentMethods] */
    /**
     * List PaymentMethods
     *
     * <p>Returns a list of all PaymentMethods.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\PaymentMethods $params = null): \StripeSDK\Responses\V1\PaymentMethods\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethods::class)->get($params);
    }

    /** POST /v1/payment_methods [operationId: PostPaymentMethods] */
    /**
     * Create a PaymentMethod
     *
     * <p>Creates a PaymentMethod object. Read the <a href="/docs/stripe-js/reference#stripe-create-payment-method">Stripe.js reference</a> to learn how to create PaymentMethods via Stripe.js.</p>
     *
     * <p>Instead of creating a PaymentMethod directly, we recommend using the <a href="/docs/payments/accept-a-payment">PaymentIntents</a> API to accept a payment immediately or the <a href="/docs/payments/save-and-reuse">SetupIntent</a> API to collect payment method details ahead of a future payment.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\PaymentMethods\Post $payload = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethods::class)->post($payload);
    }

    /** GET /v1/payment_methods/{payment_method} [operationId: GetPaymentMethodsPaymentMethod] */
    /**
     * Retrieve a PaymentMethod
     *
     * <p>Retrieves a PaymentMethod object attached to the StripeAccount. To retrieve a payment method attached to a Customer, you should use <a href="/docs/api/payment_methods/customer">Retrieve a Customer’s PaymentMethods</a></p>
     */
    public static function getByPaymentMethod(string $payment_method, ?\StripeSDK\GetParams\V1\PaymentMethods\ByPaymentMethod $params = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethods::class)->getByPaymentMethod($payment_method, $params);
    }

    /** POST /v1/payment_methods/{payment_method} [operationId: PostPaymentMethodsPaymentMethod] */
    /**
     * Update a PaymentMethod
     *
     * <p>Updates a PaymentMethod object. A PaymentMethod must be attached to a customer to be updated.</p>
     */
    public static function postByPaymentMethod(string $payment_method, ?\StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post $payload = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethods::class)->postByPaymentMethod($payment_method, $payload);
    }
}
