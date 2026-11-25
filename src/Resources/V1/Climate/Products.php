<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Climate;

final class Products extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/climate/products',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Climate\\Products\\GetStatus200',
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
     * List products
     *
     * <p>Lists all available Climate product objects.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Climate\Products $params = null): \StripeSDK\Responses\V1\Climate\Products\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Climate\Products\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array GET_BY_PRODUCT = [
        'method' => 'GET',
        'path' => '/v1/climate/products/{product}',
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
                'type' => '\\StripeSDK\\DTOs\\Climate\\Product',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'product' => [
                'maxLength' => 5000,
            ],
        ],
        'querySerialization' => [
            'expand' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Retrieve a product
     *
     * <p>Retrieves the details of a Climate product with the given ID.</p>
     */
    public function getByProduct(string $product, ?\StripeSDK\GetParams\V1\Climate\Products\ByProduct $params = null): \StripeSDK\DTOs\Climate\Product|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Climate\Product|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PRODUCT), path: ['product' => $product], parameters: $params);
        return $result;
    }
}
