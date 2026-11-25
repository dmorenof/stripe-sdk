<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal\Readers\ByReader;

final class CollectPaymentMethod extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/readers/{reader}/collect_payment_method [operationId: PostTerminalReadersReaderCollectPaymentMethod] */
    /**
     * Hand off a PaymentIntent to a Reader and collect card details
     *
     * <p>Initiates a payment flow on a Reader and updates the PaymentIntent with card details before manual confirmation. See <a href="/docs/terminal/payments/collect-card-payment?terminal-sdk-platform=server-driven&process=inspect#collect-a-paymentmethod">Collecting a Payment method</a> for more details.</p>
     */
    public static function post(string $reader, \StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectPaymentMethod\Post $payload): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers\ByReader\CollectPaymentMethod::class)->post($reader, $payload);
    }
}
