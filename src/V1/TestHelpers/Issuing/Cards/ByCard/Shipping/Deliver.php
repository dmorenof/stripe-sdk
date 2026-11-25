<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Cards\ByCard\Shipping;

final class Deliver extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/cards/{card}/shipping/deliver [operationId: PostTestHelpersIssuingCardsCardShippingDeliver] */
    /**
     * Deliver a testmode card
     *
     * <p>Updates the shipping status of the specified Issuing <code>Card</code> object to <code>delivered</code>.</p>
     */
    public static function post(string $card, ?\StripeSDK\Requests\V1\TestHelpers\Issuing\Cards\ByCard\Shipping\Deliver\Post $payload = null): \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Cards\ByCard\Shipping\Deliver::class)->post($card, $payload);
    }
}
