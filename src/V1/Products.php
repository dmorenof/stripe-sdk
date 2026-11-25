<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Products extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/products [operationId: GetProducts] */
    /**
     * List all products
     *
     * <p>Returns a list of your products. The products are returned sorted by creation date, with the most recently created products appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Products $params = null): \StripeSDK\Responses\V1\Products\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Products::class)->get($params);
    }

    /** POST /v1/products [operationId: PostProducts] */
    /**
     * Create a product
     *
     * <p>Creates a new product object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Products\Post $payload): \StripeSDK\DTOs\Product|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Products::class)->post($payload);
    }

    /** DELETE /v1/products/{id} [operationId: DeleteProductsId] */
    /**
     * Delete a product
     *
     * <p>Delete a product. Deleting a product is only possible if it has no prices associated with it. Additionally, deleting a product with <code>type=good</code> is only possible if it has no SKUs associated with it.</p>
     */
    public static function deleteById(string $id, ?\StripeSDK\Requests\V1\Products\ById\Delete $payload = null): \StripeSDK\DTOs\Deleted\Product|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Products::class)->deleteById($id, $payload);
    }

    /** GET /v1/products/{id} [operationId: GetProductsId] */
    /**
     * Retrieve a product
     *
     * <p>Retrieves the details of an existing product. Supply the unique product ID from either a product creation request or the product list, and Stripe will return the corresponding product information.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Products\ById $params = null): \StripeSDK\DTOs\Product|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Products::class)->getById($id, $params);
    }

    /** POST /v1/products/{id} [operationId: PostProductsId] */
    /**
     * Update a product
     *
     * <p>Updates the specific product by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public static function postById(string $id, ?\StripeSDK\Requests\V1\Products\ById\Post $payload = null): \StripeSDK\DTOs\Product|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Products::class)->postById($id, $payload);
    }
}
