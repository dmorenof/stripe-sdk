<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal\Readers\ByReader;

final class ConfirmPaymentIntent extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/readers/{reader}/confirm_payment_intent [operationId: PostTerminalReadersReaderConfirmPaymentIntent] */
    /**
     * Confirm a PaymentIntent on the Reader
     *
     * <p>Finalizes a payment on a Reader. See <a href="/docs/terminal/payments/collect-card-payment?terminal-sdk-platform=server-driven&process=inspect#confirm-the-paymentintent">Confirming a Payment</a> for more details.</p>
     */
    public static function post(string $reader, \StripeSDK\Requests\V1\Terminal\Readers\ByReader\ConfirmPaymentIntent\Post $payload): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers\ByReader\ConfirmPaymentIntent::class)->post($reader, $payload);
    }
}
