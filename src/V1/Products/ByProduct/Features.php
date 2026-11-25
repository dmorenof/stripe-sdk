<?php

declare(strict_types=1);

namespace StripeSDK\V1\Products\ByProduct;

final class Features extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/products/{product}/features [operationId: GetProductsProductFeatures] */
    /**
     * List all features attached to a product
     *
     * <p>Retrieve a list of features for a product</p>
     */
    public static function get(string $product, ?\StripeSDK\GetParams\V1\Products\ByProduct\Features $params = null): \StripeSDK\Responses\V1\Products\ByProduct\Features\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Products\ByProduct\Features::class)->get($product, $params);
    }

    /** POST /v1/products/{product}/features [operationId: PostProductsProductFeatures] */
    /**
     * Attach a feature to a product
     *
     * <p>Creates a product_feature, which represents a feature attachment to a product</p>
     */
    public static function post(string $product, \StripeSDK\Requests\V1\Products\ByProduct\Features\Post $payload): \StripeSDK\DTOs\ProductFeature|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Products\ByProduct\Features::class)->post($product, $payload);
    }

    /** DELETE /v1/products/{product}/features/{id} [operationId: DeleteProductsProductFeaturesId] */
    /**
     * Remove a feature from a product
     *
     * <p>Deletes the feature attachment to a product</p>
     */
    public static function deleteById(\StripeSDK\PathParams\V1\Products\ByProduct\Features\ById $identifier, ?\StripeSDK\Requests\V1\Products\ByProduct\Features\ById\Delete $payload = null): \StripeSDK\DTOs\Deleted\ProductFeature|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Products\ByProduct\Features::class)->deleteById($identifier, $payload);
    }

    /** GET /v1/products/{product}/features/{id} [operationId: GetProductsProductFeaturesId] */
    /**
     * Retrieve a product_feature
     *
     * <p>Retrieves a product_feature, which represents a feature attachment to a product</p>
     */
    public static function getById(\StripeSDK\PathParams\V1\Products\ByProduct\Features\ById $identifier, ?\StripeSDK\GetParams\V1\Products\ByProduct\Features\ById $params = null): \StripeSDK\DTOs\ProductFeature|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Products\ByProduct\Features::class)->getById($identifier, $params);
    }
}
