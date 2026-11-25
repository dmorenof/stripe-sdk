<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1;

final class Products extends \StripeSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/v1/products',
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
                'type' => '\\StripeSDK\\Responses\\V1\\Products\\GetStatus200',
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
            'ids' => 'nested',
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * List all products
     *
     * <p>Returns a list of your products. The products are returned sorted by creation date, with the most recently created products appearing first.</p>
     */
    public function get(?\StripeSDK\GetParams\V1\Products $params = null): \StripeSDK\Responses\V1\Products\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\Responses\V1\Products\GetStatus200|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/products',
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
                'type' => '\\StripeSDK\\DTOs\\Product',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'default_price_data' => 'nested',
            'expand' => 'nested',
            'images' => 'nested',
            'marketing_features' => 'nested',
            'metadata' => 'deepObject',
            'package_dimensions' => 'nested',
            'tax_details' => 'nested',
        ],
    ];

    /**
     * Create a product
     *
     * <p>Creates a new product object.</p>
     */
    public function post(\StripeSDK\Requests\V1\Products\Post $payload): \StripeSDK\DTOs\Product|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Product|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/v1/products/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Deleted\\Product',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Delete a product
     *
     * <p>Delete a product. Deleting a product is only possible if it has no prices associated with it. Additionally, deleting a product with <code>type=good</code> is only possible if it has no SKUs associated with it.</p>
     */
    public function deleteById(string $id, ?\StripeSDK\Requests\V1\Products\ById\Delete $payload = null): \StripeSDK\DTOs\Deleted\Product|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Deleted\Product|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id], body: $payload);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/v1/products/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Product',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
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
     * <p>Retrieves the details of an existing product. Supply the unique product ID from either a product creation request or the product list, and Stripe will return the corresponding product information.</p>
     */
    public function getById(string $id, ?\StripeSDK\GetParams\V1\Products\ById $params = null): \StripeSDK\DTOs\Product|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Product|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

    private const array POST_BY_ID = [
        'method' => 'POST',
        'path' => '/v1/products/{id}',
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
                'type' => '\\StripeSDK\\DTOs\\Product',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'id' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'description' => 'nested',
            'expand' => 'nested',
            'images' => 'nested',
            'marketing_features' => 'nested',
            'metadata' => 'nested',
            'package_dimensions' => 'nested',
            'tax_code' => 'nested',
            'tax_details' => 'nested',
            'unit_label' => 'nested',
            'url' => 'nested',
        ],
    ];

    /**
     * Update a product
     *
     * <p>Updates the specific product by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public function postById(string $id, ?\StripeSDK\Requests\V1\Products\ById\Post $payload = null): \StripeSDK\DTOs\Product|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Product|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST_BY_ID), path: ['id' => $id], body: $payload);
        return $result;
    }
}
