<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class PaymentMethodConfigurations extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/payment_method_configurations',
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
                'type' => '\\StripeSDK\\Responses\\V1\\PaymentMethodConfigurations\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'querySerialization' => [
            'application' => 'nested',
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List payment method configurations
     *
     * <p>List payment method configurations</p>
     */
    public function get(?\StripeSDK\GetParams\V1\PaymentMethodConfigurations $params = null): \StripeSDK\Responses\V1\PaymentMethodConfigurations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\PaymentMethodConfigurations\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_method_configurations',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\MethodConfiguration',
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
            'apple_pay' => 'nested',
            'apple_pay_later' => 'nested',
            'au_becs_debit' => 'nested',
            'bacs_debit' => 'nested',
            'bancontact' => 'nested',
            'billie' => 'nested',
            'bizum' => 'nested',
            'blik' => 'nested',
            'boleto' => 'nested',
            'card' => 'nested',
            'cartes_bancaires' => 'nested',
            'cashapp' => 'nested',
            'crypto' => 'nested',
            'customer_balance' => 'nested',
            'eps' => 'nested',
            'expand' => 'nested',
            'fpx' => 'nested',
            'fr_meal_voucher_conecs' => 'nested',
            'giropay' => 'nested',
            'google_pay' => 'nested',
            'grabpay' => 'nested',
            'ideal' => 'nested',
            'jcb' => 'nested',
            'kakao_pay' => 'nested',
            'klarna' => 'nested',
            'konbini' => 'nested',
            'kr_card' => 'nested',
            'link' => 'nested',
            'mb_way' => 'nested',
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
     * Create a payment method configuration
     *
     * <p>Creates a payment method configuration</p>
     */
    public function post(?\StripeSDK\Requests\V1\PaymentMethodConfigurations\Post $payload = null): \StripeSDK\DTOs\Payment\MethodConfiguration|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\MethodConfiguration|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_CONFIGURATION = [
        'method' => 'GET',
        'path' => '/v1/payment_method_configurations/{configuration}',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\MethodConfiguration',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'configuration' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve payment method configuration
     *
     * <p>Retrieve payment method configuration</p>
     */
    public function getByConfiguration(string $configuration, ?\StripeSDK\GetParams\V1\PaymentMethodConfigurations\ByConfiguration $params = null): \StripeSDK\DTOs\Payment\MethodConfiguration|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\MethodConfiguration|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_CONFIGURATION), path: ['configuration' => $configuration], parameters: $params);
        return $result;
    }

    private const array POST_BY_CONFIGURATION = [
        'method' => 'POST',
        'path' => '/v1/payment_method_configurations/{configuration}',
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
                'type' => '\\StripeSDK\\DTOs\\Payment\\MethodConfiguration',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'configuration' => [
                'maxLength' => 5000,
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
            'apple_pay' => 'nested',
            'apple_pay_later' => 'nested',
            'au_becs_debit' => 'nested',
            'bacs_debit' => 'nested',
            'bancontact' => 'nested',
            'billie' => 'nested',
            'bizum' => 'nested',
            'blik' => 'nested',
            'boleto' => 'nested',
            'card' => 'nested',
            'cartes_bancaires' => 'nested',
            'cashapp' => 'nested',
            'crypto' => 'nested',
            'customer_balance' => 'nested',
            'eps' => 'nested',
            'expand' => 'nested',
            'fpx' => 'nested',
            'fr_meal_voucher_conecs' => 'nested',
            'giropay' => 'nested',
            'google_pay' => 'nested',
            'grabpay' => 'nested',
            'ideal' => 'nested',
            'jcb' => 'nested',
            'kakao_pay' => 'nested',
            'klarna' => 'nested',
            'konbini' => 'nested',
            'kr_card' => 'nested',
            'link' => 'nested',
            'mb_way' => 'nested',
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
     * Update payment method configuration
     *
     * <p>Update payment method configuration</p>
     */
    public function postByConfiguration(string $configuration, ?\StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post $payload = null): \StripeSDK\DTOs\Payment\MethodConfiguration|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\MethodConfiguration|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_CONFIGURATION), path: ['configuration' => $configuration], body: $payload);
        return $result;
    }
}
