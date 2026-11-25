<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class ShippingRates extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/shipping_rates',
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
                'type' => '\\StripeSDK\\Responses\\V1\\ShippingRates\\GetStatus200',
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
     * List all shipping rates
     *
     * <p>Returns a list of your shipping rates.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\ShippingRates $params = null): \StripeSDK\Responses\V1\ShippingRates\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\ShippingRates\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/shipping_rates',
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
                'type' => '\\StripeSDK\\DTOs\\ShippingRate',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'delivery_estimate' => 'nested',
            'expand' => 'nested',
            'fixed_amount' => 'nested',
            'metadata' => 'deepObject',
        ],
    ];

    /**
     * Create a shipping rate
     *
     * <p>Creates a new shipping rate object.</p>
     */
    public function post(\StripeSDK\Requests\V1\ShippingRates\Post $payload): \StripeSDK\DTOs\ShippingRate|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ShippingRate|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_SHIPPING_RATE_TOKEN = [
        'method' => 'GET',
        'path' => '/v1/shipping_rates/{shipping_rate_token}',
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
                'type' => '\\StripeSDK\\DTOs\\ShippingRate',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'shipping_rate_token' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a shipping rate
     *
     * <p>Returns the shipping rate object with the given ID.</p>
     */
    public function getByShippingRateToken(string $shipping_rate_token, ?\StripeSDK\GetParams\V1\ShippingRates\ByShippingRateToken $params = null): \StripeSDK\DTOs\ShippingRate|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ShippingRate|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_SHIPPING_RATE_TOKEN), path: ['shipping_rate_token' => $shipping_rate_token], parameters: $params);
        return $result;
    }

    private const array POST_BY_SHIPPING_RATE_TOKEN = [
        'method' => 'POST',
        'path' => '/v1/shipping_rates/{shipping_rate_token}',
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
                'type' => '\\StripeSDK\\DTOs\\ShippingRate',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'shipping_rate_token' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
            'fixed_amount' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Update a shipping rate
     *
     * <p>Updates an existing shipping rate object.</p>
     */
    public function postByShippingRateToken(string $shipping_rate_token, ?\StripeSDK\Requests\V1\ShippingRates\ByShippingRateToken\Post $payload = null): \StripeSDK\DTOs\ShippingRate|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\ShippingRate|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_SHIPPING_RATE_TOKEN), path: ['shipping_rate_token' => $shipping_rate_token], body: $payload);
        return $result;
    }
}
