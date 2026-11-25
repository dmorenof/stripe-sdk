<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class PaymentMethodDomains extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/payment_method_domains',
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
                'type' => '\\StripeSDK\\Responses\\V1\\PaymentMethodDomains\\GetStatus200',
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
     * List payment method domains
     *
     * <p>Lists the details of existing payment method domains.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\PaymentMethodDomains $params = null): \StripeSDK\Responses\V1\PaymentMethodDomains\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\PaymentMethodDomains\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/payment_method_domains',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Create a payment method domain
     *
     * <p>Creates a payment method domain.</p>
     */
    public function post(\StripeSDK\Requests\V1\PaymentMethodDomains\Post $payload): \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_PAYMENT_METHOD_DOMAIN = [
        'method' => 'GET',
        'path' => '/v1/payment_method_domains/{payment_method_domain}',
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
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a payment method domain
     *
     * <p>Retrieves the details of an existing payment method domain.</p>
     */
    public function getByPaymentMethodDomain(string $payment_method_domain, ?\StripeSDK\GetParams\V1\PaymentMethodDomains\ByPaymentMethodDomain $params = null): \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PAYMENT_METHOD_DOMAIN), path: ['payment_method_domain' => $payment_method_domain], parameters: $params);
        return $result;
    }

    private const array POST_BY_PAYMENT_METHOD_DOMAIN = [
        'method' => 'POST',
        'path' => '/v1/payment_method_domains/{payment_method_domain}',
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
     * Update a payment method domain
     *
     * <p>Updates an existing payment method domain.</p>
     */
    public function postByPaymentMethodDomain(string $payment_method_domain, ?\StripeSDK\Requests\V1\PaymentMethodDomains\ByPaymentMethodDomain\Post $payload = null): \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\MethodDomain|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_PAYMENT_METHOD_DOMAIN), path: ['payment_method_domain' => $payment_method_domain], body: $payload);
        return $result;
    }
}
