<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Customers\ByCustomer;

final class PaymentMethods extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/payment_methods',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Customers\\ByCustomer\\PaymentMethods\\GetStatus200',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'customer' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List a Customer's PaymentMethods
     *
     * <p>Returns a list of PaymentMethods for a given Customer</p>
     */
    public function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\PaymentMethods $params = null): \StripeSDK\Responses\V1\Customers\ByCustomer\PaymentMethods\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Customers\ByCustomer\PaymentMethods\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['customer' => $customer], parameters: $params);
        return $result;
    }

    private const array GET_BY_PAYMENT_METHOD = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/payment_methods/{payment_method}',
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
            'customer' => [
                'maxLength' => 5000,
            ],
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
     * Retrieve a Customer's PaymentMethod
     *
     * <p>Retrieves a PaymentMethod object for a given Customer.</p>
     */
    public function getByPaymentMethod(\StripeSDK\PathParams\V1\Customers\ByCustomer\PaymentMethods\ByPaymentMethod $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\PaymentMethods\ByPaymentMethod $params = null): \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Payment\Method|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PAYMENT_METHOD), path: $identifier, parameters: $params);
        return $result;
    }
}
