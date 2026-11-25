<?php

declare(strict_types=1);

namespace StripeSDK\V1\Climate;

final class Products extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/climate/products [operationId: GetClimateProducts] */
    /**
     * List products
     *
     * <p>Lists all available Climate product objects.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Climate\Products $params = null): \StripeSDK\Responses\V1\Climate\Products\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Climate\Products::class)->get($params);
    }

    /** GET /v1/climate/products/{product} [operationId: GetClimateProductsProduct] */
    /**
     * Retrieve a product
     *
     * <p>Retrieves the details of a Climate product with the given ID.</p>
     */
    public static function getByProduct(string $product, ?\StripeSDK\GetParams\V1\Climate\Products\ByProduct $params = null): \StripeSDK\DTOs\Climate\Product|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Climate\Products::class)->getByProduct($product, $params);
    }
}
