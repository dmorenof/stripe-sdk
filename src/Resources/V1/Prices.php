<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Prices extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/prices',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Prices\\GetStatus200',
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
            'lookup_keys' => 'nested',
            'recurring' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all prices
     *
     * <p>Returns a list of your active prices, excluding <a href="/docs/products-prices/pricing-models#inline-pricing">inline prices</a>. For the list of inactive prices, set <code>active</code> to false.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Prices $params = null): \StripeSDK\Responses\V1\Prices\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Prices\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/prices',
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
                'type' => '\\StripeSDK\\DTOs\\Price',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'currency_options' => 'nested',
            'custom_unit_amount' => 'nested',
            'expand' => 'nested',
            'metadata' => 'deepObject',
            'product_data' => 'nested',
            'recurring' => 'nested',
            'tiers' => 'nested',
            'transform_quantity' => 'nested',
        ],
    ];

    /**
     * Create a price
     *
     * <p>Creates a new <a href="https://docs.stripe.com/api/prices">Price</a> for an existing <a href="https://docs.stripe.com/api/products">Product</a>. The Price can be recurring or one-time.</p>
     */
    public function post(\StripeSDK\Requests\V1\Prices\Post $payload): \StripeSDK\DTOs\Price|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Price|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array GET_BY_PRICE = [
        'method' => 'GET',
        'path' => '/v1/prices/{price}',
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
                'type' => '\\StripeSDK\\DTOs\\Price',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'price' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a price
     *
     * <p>Retrieves the price with the given ID.</p>
     */
    public function getByPrice(string $price, ?\StripeSDK\GetParams\V1\Prices\ByPrice $params = null): \StripeSDK\DTOs\Price|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Price|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PRICE), path: ['price' => $price], parameters: $params);
        return $result;
    }

    private const array POST_BY_PRICE = [
        'method' => 'POST',
        'path' => '/v1/prices/{price}',
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
                'type' => '\\StripeSDK\\DTOs\\Price',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'price' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'currency_options' => 'nested',
            'expand' => 'nested',
            'metadata' => 'nested',
        ],
    ];

    /**
     * Update a price
     *
     * <p>Updates the specified price by setting the values of the parameters passed. Any parameters not provided are left unchanged.</p>
     */
    public function postByPrice(string $price, ?\StripeSDK\Requests\V1\Prices\ByPrice\Post $payload = null): \StripeSDK\DTOs\Price|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Price|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_PRICE), path: ['price' => $price], body: $payload);
        return $result;
    }
}
