<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\PaymentMethodDomains\ByPaymentMethodDomain;

final class Validate extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_method_domains/{payment_method_domain}/validate',
        'security' => [
            [
                'basicAuth' => [],
            ],
            [
                'bearerAuth' => [],
            ],
        ],
        'success' => [
            200,
            'default',
        ],
        'errors' => [
            'default' => '\\StripeSDK\\DTOs\\Error',
        ],
        'errorResponses' => [
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\StripeSDK\\DTOs\\Payment\\MethodDomain',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'payment_method_domain' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

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
    public function post(string $payment_method_domain, ?\StripeSDK\Requests\V1\PaymentMethodDomains\ByPaymentMethodDomain\Validate\Post $payload = null): \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['payment_method_domain' => $payment_method_domain], body: $payload);
        return $result;
    }
}
