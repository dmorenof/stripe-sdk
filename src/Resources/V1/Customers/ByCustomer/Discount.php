<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Customers\ByCustomer;

final class Discount extends \StripeSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v1/customers/{customer}/discount',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\Discount',
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
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a customer discount
     *
     * <p>Removes the currently applied discount on a customer.</p>
     */
    public function delete(string $customer, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Discount\Delete $payload = null): \StripeSDK\DTOs\Deleted\Discount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\Discount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: ['customer' => $customer], body: $payload);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/discount',
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
                'type' => '\\StripeSDK\\DTOs\\Discount',
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

    public function get(string $customer, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Discount $params = null): \StripeSDK\DTOs\Discount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Discount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['customer' => $customer], parameters: $params);
        return $result;
    }
}
