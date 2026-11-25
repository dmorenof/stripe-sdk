<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\PaymentMethods\ByPaymentMethod;

final class Attach extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_methods/{payment_method}/attach',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Method',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'payment_method' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Attach a PaymentMethod to a Customer
     *
     * <p>Attaches a PaymentMethod object to a Customer.</p>
     *
     * <p>To attach a new PaymentMethod to a customer for future payments, we recommend you use a <a href="/docs/api/setup_intents">SetupIntent</a>
     * or a PaymentIntent with <a href="/docs/api/payment_intents/create#create_payment_intent-setup_future_usage">setup_future_usage</a>.
     * These approaches will perform any necessary steps to set up the PaymentMethod for future payments. Using the <code>/v1/payment_methods/:id/attach</code>
     * endpoint without first using a SetupIntent or PaymentIntent with <code>setup_future_usage</code> does not optimize the PaymentMethod for
     * future use, which makes later declines and payment friction more likely.
     * See <a href="/docs/payments/payment-intents#future-usage">Optimizing cards for future payments</a> for more information about setting up
     * future payments.</p>
     *
     * <p>To use this PaymentMethod as the default for invoice or subscription payments,
     * set <a href="/docs/api/customers/update#update_customer-invoice_settings-default_payment_method"><code>invoice_settings.default_payment_method</code></a>,
     * on the Customer to the PaymentMethod’s ID.</p>
     */
    public function post(string $payment_method, ?\StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Attach\Post $payload = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['payment_method' => $payment_method], body: $payload);
        return $result;
    }
}
