<?php

declare(strict_types=1);

namespace StripeSDK\Resources\V1\Climate\Orders\ByOrder;

final class Cancel extends \StripeSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/v1/climate/orders/{order}/cancel',
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
                'type' => '\\StripeSDK\\DTOs\\Climate\\Order',
                'schemaNullable' => false,
            ],
            'default' => [
                'type' => '\\StripeSDK\\DTOs\\Error',
                'schemaNullable' => false,
            ],
        ],
        'validation' => [
            'order' => [
                'maxLength' => 5000,
            ],
        ],
        'requestMediaType' => 'application/x-www-form-urlencoded',
        'bodySerialization' => [
            'expand' => 'nested',
        ],
    ];

    /**
     * Cancel an order
     *
     * <p>Cancels a Climate order. You can cancel an order within 24 hours of creation. Stripe refunds the
     * reservation <code>amount_subtotal</code>, but not the <code>amount_fees</code> for user-triggered cancellations. Frontier
     * might cancel reservations if suppliers fail to deliver. If Frontier cancels the reservation, Stripe
     * provides 90 days advance notice and refunds the <code>amount_total</code>.</p>
     */
    public function post(string $order, ?\StripeSDK\Requests\V1\Climate\Orders\ByOrder\Cancel\Post $payload = null): \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null
    {
        /** @var \StripeSDK\DTOs\Climate\Order|\StripeSDK\DTOs\Error|null $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['order' => $order], body: $payload);
        return $result;
    }
}
