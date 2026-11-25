<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId;

final class Discount extends \StripeSDK\Client
{
    private const array DELETE = [
        'method' => 'DELETE',
        'path' => '/v1/customers/{customer}/subscriptions/{subscription_exposed_id}/discount',
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
            'subscription_exposed_id' => [
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
    public function delete(\StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount $identifier, ?\StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount\Delete $payload = null): \StripeSDK\DTOs\Deleted\Discount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\Discount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE), path: $identifier, body: $payload);
        return $result;
    }

    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/customers/{customer}/subscriptions/{subscription_exposed_id}/discount',
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
            'subscription_exposed_id' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    public function get(\StripeSDK\PathParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount $identifier, ?\StripeSDK\GetParams\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Discount $params = null): \StripeSDK\DTOs\Discount|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Discount|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }
}
