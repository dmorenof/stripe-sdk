<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentMethodDomains\ByPaymentMethodDomain;

final class Validate extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/payment_method_domains/{payment_method_domain}/validate [operationId: PostPaymentMethodDomainsPaymentMethodDomainValidate] */
    /**
     * Validate an existing payment method domain
     *
     * <p>Some payment methods might require additional steps to register a domain. If the requirements weren’t satisfied when the domain was created, the payment method will be inactive on the domain.
     * The payment method doesn’t appear in Elements or Embedded Checkout for this domain until it is active.</p>
     *
     * <p>To activate a payment method on an existing payment method domain, complete the required registration steps specific to the payment method, and then validate the payment method domain with this endpoint.</p>
     *
     * <p>Related guides: <a href="/docs/payments/payment-methods/pmd-registration">Payment method domains</a>.</p>
     */
    public static function post(string $payment_method_domain, ?\StripeSDK\Requests\V1\PaymentMethodDomains\ByPaymentMethodDomain\Validate\Post $payload = null): \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentMethodDomains\ByPaymentMethodDomain\Validate::class)->post($payment_method_domain, $payload);
    }
}
