<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Cards\ByCard\Shipping;

final class ReturnResource extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/cards/{card}/shipping/return [operationId: PostTestHelpersIssuingCardsCardShippingReturn] */
    /**
     * Return a testmode card
     *
     * <p>Updates the shipping status of the specified Issuing <code>Card</code> object to <code>returned</code>.</p>
     */
    public static function post(string $card, ?\StripeSDK\Requests\V1\TestHelpers\Issuing\Cards\ByCard\Shipping\ReturnResource\Post $payload = null): \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Cards\ByCard\Shipping\ReturnResource::class)->post($card, $payload);
    }
}
