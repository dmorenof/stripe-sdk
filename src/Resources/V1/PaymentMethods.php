<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class PaymentMethods extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/payment_methods',
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
                'type' => '\\StripeSDK\\Responses\\V1\\PaymentMethods\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List PaymentMethods
     *
     * <p>Returns a list of all PaymentMethods.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\PaymentMethods $params = null): \StripeSDK\Responses\V1\PaymentMethods\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\PaymentMethods\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_methods',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'acss_debit' => 'nested',
            'affirm' => 'nested',
            'afterpay_clearpay' => 'nested',
            'alipay' => 'nested',
            'alma' => 'nested',
            'amazon_pay' => 'nested',
            'au_becs_debit' => 'nested',
            'bacs_debit' => 'nested',
            'bancontact' => 'nested',
            'billie' => 'nested',
            'billing_details' => 'nested',
            'bizum' => 'nested',
            'blik' => 'nested',
            'boleto' => 'nested',
            'card' => 'nested',
            'cashapp' => 'nested',
            'crypto' => 'nested',
            'custom' => 'nested',
            'customer_balance' => 'nested',
            'eps' => 'nested',
            'expand' => 'nested',
            'fpx' => 'nested',
            'giropay' => 'nested',
            'grabpay' => 'nested',
            'ideal' => 'nested',
            'interac_present' => 'nested',
            'kakao_pay' => 'nested',
            'klarna' => 'nested',
            'konbini' => 'nested',
            'kr_card' => 'nested',
            'link' => 'nested',
            'mb_way' => 'nested',
            'metadata' => 'deepObject',
            'mobilepay' => 'nested',
            'multibanco' => 'nested',
            'naver_pay' => 'nested',
            'nz_bank_account' => 'nested',
            'oxxo' => 'nested',
            'p24' => 'nested',
            'pay_by_bank' => 'nested',
            'payco' => 'nested',
            'paynow' => 'nested',
            'paypal' => 'nested',
            'paypay' => 'nested',
            'payto' => 'nested',
            'pix' => 'nested',
            'promptpay' => 'nested',
            'radar_options' => 'nested',
            'revolut_pay' => 'nested',
            'samsung_pay' => 'nested',
            'satispay' => 'nested',
            'scalapay' => 'nested',
            'sepa_debit' => 'nested',
            'sequra' => 'nested',
            'sofort' => 'nested',
            'sunbit' => 'nested',
            'swish' => 'nested',
            'twint' => 'nested',
            'upi' => 'nested',
            'us_bank_account' => 'nested',
            'wechat_pay' => 'nested',
            'zip' => 'nested',
        ],
    ];

    /**
     * Create a PaymentMethod
     *
     * <p>Creates a PaymentMethod object. Read the <a href="/docs/stripe-js/reference#stripe-create-payment-method">Stripe.js reference</a> to learn how to create PaymentMethods via Stripe.js.</p>
     *
     * <p>Instead of creating a PaymentMethod directly, we recommend using the <a href="/docs/payments/accept-a-payment">PaymentIntents</a> API to accept a payment immediately or the <a href="/docs/payments/save-and-reuse">SetupIntent</a> API to collect payment method details ahead of a future payment.</p>
     */
    public function post(?\StripeSDK\Requests\V1\PaymentMethods\Post $payload = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_PAYMENT_METHOD = [
        'method' => 'GET',
        'path' => '/v1/payment_methods/{payment_method}',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a PaymentMethod
     *
     * <p>Retrieves a PaymentMethod object attached to the StripeAccount. To retrieve a payment method attached to a Customer, you should use <a href="/docs/api/payment_methods/customer">Retrieve a Customer’s PaymentMethods</a></p>
     */
    public function getByPaymentMethod(string $payment_method, ?\StripeSDK\GetParams\V1\PaymentMethods\ByPaymentMethod $params = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PAYMENT_METHOD), path: ['payment_method' => $payment_method], parameters: $params);
        return $result;
    }

    private const array POST_BY_PAYMENT_METHOD = [
        'method' => 'POST',
        'path' => '/v1/payment_methods/{payment_method}',
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
            'billing_details' => 'nested',
            'card' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
            'us_bank_account' => 'nested',
        ],
    ];

    /**
     * Update a PaymentMethod
     *
     * <p>Updates a PaymentMethod object. A PaymentMethod must be attached to a customer to be updated.</p>
     */
    public function postByPaymentMethod(string $payment_method, ?\StripeSDK\Requests\V1\PaymentMethods\ByPaymentMethod\Post $payload = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_PAYMENT_METHOD), path: ['payment_method' => $payment_method], body: $payload);
        return $result;
    }
}
