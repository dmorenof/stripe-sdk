<?php

declare(strict_types=1);

namespace StripeSDK\V1\PaymentIntents\ByIntent;

final class AmountDetailsLineItems extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/payment_intents/{intent}/amount_details_line_items [operationId: GetPaymentIntentsIntentAmountDetailsLineItems] */
    /**
     * List all PaymentIntent LineItems
     *
     * <p>Lists all LineItems of a given PaymentIntent.</p>
     */
    public static function get(string $intent, ?\StripeSDK\GetParams\V1\PaymentIntents\ByIntent\AmountDetailsLineItems $params = null): \StripeSDK\Responses\V1\PaymentIntents\ByIntent\AmountDetailsLineItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PaymentIntents\ByIntent\AmountDetailsLineItems::class)->get($intent, $params);
    }
}
