<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class PaymentMethodDomains extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/payment_method_domains [operationId: GetPaymentMethodDomains] */
    /**
     * List payment method domains
     *
     * <p>Lists the details of existing payment method domains.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\PaymentMethodDomains $params = null): \StripeSDK\Responses\V1\PaymentMethodDomains\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethodDomains::class)->get($params);
    }

    /** POST /v1/payment_method_domains [operationId: PostPaymentMethodDomains] */
    /**
     * Create a payment method domain
     *
     * <p>Creates a payment method domain.</p>
     */
    public static function post(\StripeSDK\Requests\V1\PaymentMethodDomains\Post $payload): \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethodDomains::class)->post($payload);
    }

    /** GET /v1/payment_method_domains/{payment_method_domain} [operationId: GetPaymentMethodDomainsPaymentMethodDomain] */
    /**
     * Retrieve a payment method domain
     *
     * <p>Retrieves the details of an existing payment method domain.</p>
     */
    public static function getByPaymentMethodDomain(string $payment_method_domain, ?\StripeSDK\GetParams\V1\PaymentMethodDomains\ByPaymentMethodDomain $params = null): \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethodDomains::class)->getByPaymentMethodDomain($payment_method_domain, $params);
    }

    /** POST /v1/payment_method_domains/{payment_method_domain} [operationId: PostPaymentMethodDomainsPaymentMethodDomain] */
    /**
     * Update a payment method domain
     *
     * <p>Updates an existing payment method domain.</p>
     */
    public static function postByPaymentMethodDomain(string $payment_method_domain, ?\StripeSDK\Requests\V1\PaymentMethodDomains\ByPaymentMethodDomain\Post $payload = null): \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethodDomains::class)->postByPaymentMethodDomain($payment_method_domain, $payload);
    }
}
