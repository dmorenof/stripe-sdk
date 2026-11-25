<?php

declare(strict_types=1);

namespace StripeSDK\V1\Climate;

final class Orders extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/climate/orders [operationId: GetClimateOrders] */
    /**
     * List orders
     *
     * <p>Lists all Climate order objects. The orders are returned sorted by creation date, with the
     * most recently created orders appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Climate\Orders $params = null): \StripeSDK\Responses\V1\Climate\Orders\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Climate\Orders::class)->get($params);
    }

    /** POST /v1/climate/orders [operationId: PostClimateOrders] */
    /**
     * Create an order
     *
     * <p>Creates a Climate order object for a given Climate product. The order will be processed immediately
     * after creation and payment will be deducted your Stripe balance.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Climate\Orders\Post $payload): \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Climate\Orders::class)->post($payload);
    }

    /** GET /v1/climate/orders/{order} [operationId: GetClimateOrdersOrder] */
    /**
     * Retrieve an order
     *
     * <p>Retrieves the details of a Climate order object with the given ID.</p>
     */
    public static function getByOrder(string $order, ?\StripeSDK\GetParams\V1\Climate\Orders\ByOrder $params = null): \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Climate\Orders::class)->getByOrder($order, $params);
    }

    /** POST /v1/climate/orders/{order} [operationId: PostClimateOrdersOrder] */
    /**
     * Update an order
     *
     * <p>Updates the specified order by setting the values of the parameters passed.</p>
     */
    public static function postByOrder(string $order, ?\StripeSDK\Requests\V1\Climate\Orders\ByOrder\Post $payload = null): \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Climate\Orders::class)->postByOrder($order, $payload);
    }
}
