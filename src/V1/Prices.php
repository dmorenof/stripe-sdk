<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Prices extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/prices [operationId: GetPrices] */
    /**
     * List all prices
     *
     * <p>Returns a list of your active prices, excluding <a href="/docs/products-prices/pricing-models#inline-pricing">inline prices</a>. For the list of inactive prices, set <code>active</code> to false.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Prices $params = null): \StripeSDK\Responses\V1\Prices\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Prices::class)->get($params);
    }

    /** POST /v1/prices [operationId: PostPrices] */
    /**
     * Create a price
     *
     * <p>Creates a new <a href="https://docs.stripe.com/api/prices">Price</a> for an existing <a href="https://docs.stripe.com/api/products">Product</a>. The Price can be recurring or one-time.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Prices\Post $payload): \StripeSDK\DTOs\Price|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Prices::class)->post($payload);
    }

    /** GET /v1/prices/{price} [operationId: GetPricesPrice] */
    /**
     * Retrieve a price
     *
     * <p>Retrieves the price with the given ID.</p>
     */
    public static function getByPrice(string $price, ?\StripeSDK\GetParams\V1\Prices\ByPrice $params = null): \StripeSDK\DTOs\Price|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Prices::class)->getByPrice($price, $params);
    }

    /** POST /v1/prices/{price} [operationId: PostPricesPrice] */
    /**
     * Update a price
     *
     * <p>Updates the specified price by setting the values of the parameters passed. Any parameters not provided are left unchanged.</p>
     */
    public static function postByPrice(string $price, ?\StripeSDK\Requests\V1\Prices\ByPrice\Post $payload = null): \StripeSDK\DTOs\Price|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Prices::class)->postByPrice($price, $payload);
    }
}
