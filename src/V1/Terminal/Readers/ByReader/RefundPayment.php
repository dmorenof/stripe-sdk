<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal\Readers\ByReader;

final class RefundPayment extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/readers/{reader}/refund_payment [operationId: PostTerminalReadersReaderRefundPayment] */
    /**
     * Refund a Charge or a PaymentIntent in-person
     *
     * <p>Initiates an in-person refund on a Reader. See <a href="/docs/terminal/payments/regional?integration-country=CA#refund-an-interac-payment">Refund an Interac Payment</a> for more details.</p>
     */
    public static function post(string $reader, ?\StripeSDK\Requests\V1\Terminal\Readers\ByReader\RefundPayment\Post $payload = null): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers\ByReader\RefundPayment::class)->post($reader, $payload);
    }
}
