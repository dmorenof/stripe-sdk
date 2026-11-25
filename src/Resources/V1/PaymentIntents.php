<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class PaymentIntents extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/payment_intents',
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
                'type' => '\\StripeSDK\\Responses\\V1\\PaymentIntents\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'created' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all PaymentIntents
     *
     * <p>Returns a list of PaymentIntents.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\PaymentIntents $params = null): \StripeSDK\Responses\V1\PaymentIntents\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\PaymentIntents\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_intents',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Intent',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'allowed_payment_method_types' => 'nested',
            'amount_details' => 'nested',
            'automatic_payment_methods' => 'nested',
            'excluded_payment_method_types' => 'nested',
            'expand' => 'nested',
            'hooks' => 'nested',
            'mandate_data' => 'nested',
            'metadata' => 'deepObject',
            'off_session' => 'nested',
            'payment_details' => 'nested',
            'payment_method_data' => 'nested',
            'payment_method_options' => 'nested',
            'radar_options' => 'nested',
            'shipping' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

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
    public function post(\StripeSDK\Requests\V1\PaymentIntents\Post $payload): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_INTENT = [
        'method' => 'GET',
        'path' => '/v1/payment_intents/{intent}',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Intent',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'intent' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a PaymentIntent
     *
     * <p>Retrieves the details of a PaymentIntent that has previously been created. </p>
     *
     * <p>You can retrieve a PaymentIntent client-side using a publishable key when the <code>client_secret</code> is in the query string. </p>
     *
     * <p>If you retrieve a PaymentIntent with a publishable key, it only returns a subset of properties. Refer to the <a href="/api/payment_intents/object">payment intent</a> object reference for more details.</p>
     */
    public function getByIntent(string $intent, ?\StripeSDK\GetParams\V1\PaymentIntents\ByIntent $params = null): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_INTENT), path: ['intent' => $intent], parameters: $params);
        return $result;
    }

    private const array POST_BY_INTENT = [
        'method' => 'POST',
        'path' => '/v1/payment_intents/{intent}',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\Intent',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'intent' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'allowed_payment_method_types' => 'nested',
            'amount_details' => 'nested',
            'application_fee_amount' => 'nested',
            'excluded_payment_method_types' => 'nested',
            'expand' => 'nested',
            'hooks' => 'nested',
            'metadata' => 'nested',
            'payment_details' => 'nested',
            'payment_method_data' => 'nested',
            'payment_method_options' => 'nested',
            'receipt_email' => 'nested',
            'shipping' => 'nested',
            'transfer_data' => 'nested',
        ],
    ];

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
    public function postByIntent(string $intent, ?\StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post $payload = null): \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Intent|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_INTENT), path: ['intent' => $intent], body: $payload);
        return $result;
    }
}
