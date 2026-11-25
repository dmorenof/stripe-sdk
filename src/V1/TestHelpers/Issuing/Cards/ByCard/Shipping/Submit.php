<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Cards\ByCard\Shipping;

final class Submit extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/cards/{card}/shipping/submit [operationId: PostTestHelpersIssuingCardsCardShippingSubmit] */
    /**
     * Submit a testmode card
     *
     * <p>Updates the shipping status of the specified Issuing <code>Card</code> object to <code>submitted</code>. This method requires Stripe Version ‘2024-09-30.acacia’ or later.</p>
     */
    public static function post(string $card, ?\StripeSDK\Requests\V1\TestHelpers\Issuing\Cards\ByCard\Shipping\Submit\Post $payload = null): \StripeSDK\DTOs\Issuing\Card|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Cards\ByCard\Shipping\Submit::class)->post($card, $payload);
    }
}
