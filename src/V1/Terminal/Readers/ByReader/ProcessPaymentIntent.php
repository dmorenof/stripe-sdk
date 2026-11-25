<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal\Readers\ByReader;

final class ProcessPaymentIntent extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/readers/{reader}/process_payment_intent [operationId: PostTerminalReadersReaderProcessPaymentIntent] */
    /**
     * Hand-off a PaymentIntent to a Reader
     *
     * <p>Initiates a payment flow on a Reader. See <a href="/docs/terminal/payments/collect-card-payment?terminal-sdk-platform=server-driven&process=immediately#process-payment">process the payment</a> for more details.</p>
     */
    public static function post(string $reader, \StripeSDK\Requests\V1\Terminal\Readers\ByReader\ProcessPaymentIntent\Post $payload): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers\ByReader\ProcessPaymentIntent::class)->post($reader, $payload);
    }
}
