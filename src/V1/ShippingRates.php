<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class ShippingRates extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/shipping_rates [operationId: GetShippingRates] */
    /**
     * List all shipping rates
     *
     * <p>Returns a list of your shipping rates.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\ShippingRates $params = null): \StripeSDK\Responses\V1\ShippingRates\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ShippingRates::class)->get($params);
    }

    /** POST /v1/shipping_rates [operationId: PostShippingRates] */
    /**
     * Create a shipping rate
     *
     * <p>Creates a new shipping rate object.</p>
     */
    public static function post(\StripeSDK\Requests\V1\ShippingRates\Post $payload): \StripeSDK\DTOs\ShippingRate|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ShippingRates::class)->post($payload);
    }

    /** GET /v1/shipping_rates/{shipping_rate_token} [operationId: GetShippingRatesShippingRateToken] */
    /**
     * Retrieve a shipping rate
     *
     * <p>Returns the shipping rate object with the given ID.</p>
     */
    public static function getByShippingRateToken(string $shipping_rate_token, ?\StripeSDK\GetParams\V1\ShippingRates\ByShippingRateToken $params = null): \StripeSDK\DTOs\ShippingRate|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ShippingRates::class)->getByShippingRateToken($shipping_rate_token, $params);
    }

    /** POST /v1/shipping_rates/{shipping_rate_token} [operationId: PostShippingRatesShippingRateToken] */
    /**
     * Update a shipping rate
     *
     * <p>Updates an existing shipping rate object.</p>
     */
    public static function postByShippingRateToken(string $shipping_rate_token, ?\StripeSDK\Requests\V1\ShippingRates\ByShippingRateToken\Post $payload = null): \StripeSDK\DTOs\ShippingRate|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ShippingRates::class)->postByShippingRateToken($shipping_rate_token, $payload);
    }
}
