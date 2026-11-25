<?php

declare(strict_types=1);

namespace StripeSDK\V1\Charges\ByCharge;

final class Capture extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/charges/{charge}/capture [operationId: PostChargesChargeCapture] */
    /**
     * Capture a charge
     *
     * <p>This method is deprecated and will be removed soon. If your integration uses it, you need to update it to use a different payment flow, such as <a href="/docs/payments/payment-intents">the Payment Intents API</a>.</p>
     */
    public static function post(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Capture\Post $payload = null): \StripeSDK\DTOs\Charge|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges\ByCharge\Capture::class)->post($charge, $payload);
    }
}
