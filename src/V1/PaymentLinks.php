<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class PaymentLinks extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/payment_links [operationId: GetPaymentLinks] */
    /**
     * List all payment links
     *
     * <p>Returns a list of your payment links.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\PaymentLinks $params = null): \StripeSDK\Responses\V1\PaymentLinks\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentLinks::class)->get($params);
    }

    /** POST /v1/payment_links [operationId: PostPaymentLinks] */
    /**
     * Create a payment link
     *
     * <p>Creates a payment link.</p>
     */
    public static function post(\StripeSDK\Requests\V1\PaymentLinks\Post $payload): \StripeSDK\DTOs\Payment\Link|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentLinks::class)->post($payload);
    }

    /** GET /v1/payment_links/{payment_link} [operationId: GetPaymentLinksPaymentLink] */
    /**
     * Retrieve payment link
     *
     * <p>Retrieve a payment link.</p>
     */
    public static function getByPaymentLink(string $payment_link, ?\StripeSDK\GetParams\V1\PaymentLinks\ByPaymentLink $params = null): \StripeSDK\DTOs\Payment\Link|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentLinks::class)->getByPaymentLink($payment_link, $params);
    }

    /** POST /v1/payment_links/{payment_link} [operationId: PostPaymentLinksPaymentLink] */
    /**
     * Update a payment link
     *
     * <p>Updates a payment link.</p>
     */
    public static function postByPaymentLink(string $payment_link, ?\StripeSDK\Requests\V1\PaymentLinks\ByPaymentLink\Post $payload = null): \StripeSDK\DTOs\Payment\Link|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentLinks::class)->postByPaymentLink($payment_link, $payload);
    }
}
