<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Cards\ByCard\Shipping;

final class Ship extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/cards/{card}/shipping/ship [operationId: PostTestHelpersIssuingCardsCardShippingShip] */
    /**
     * Ship a testmode card
     *
     * <p>Updates the shipping status of the specified Issuing <code>Card</code> object to <code>shipped</code>.</p>
     */
    public static function post(string $card, ?\StripeSDK\Requests\V1\TestHelpers\Issuing\Cards\ByCard\Shipping\Ship\Post $payload = null): \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Cards\ByCard\Shipping\Ship::class)->post($card, $payload);
    }
}
