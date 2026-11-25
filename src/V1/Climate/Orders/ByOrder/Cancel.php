<?php

declare(strict_types=1);

namespace StripeSDK\V1\Climate\Orders\ByOrder;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/climate/orders/{order}/cancel [operationId: PostClimateOrdersOrderCancel] */
    /**
     * Cancel an order
     *
     * <p>Cancels a Climate order. You can cancel an order within 24 hours of creation. Stripe refunds the
     * reservation <code>amount_subtotal</code>, but not the <code>amount_fees</code> for user-triggered cancellations. Frontier
     * might cancel reservations if suppliers fail to deliver. If Frontier cancels the reservation, Stripe
     * provides 90 days advance notice and refunds the <code>amount_total</code>.</p>
     */
    public static function post(string $order, ?\StripeSDK\Requests\V1\Climate\Orders\ByOrder\Cancel\Post $payload = null): \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Climate\Orders\ByOrder\Cancel::class)->post($order, $payload);
    }
}
