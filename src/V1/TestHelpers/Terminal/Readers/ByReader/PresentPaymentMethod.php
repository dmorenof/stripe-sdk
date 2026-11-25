<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Terminal\Readers\ByReader;

final class PresentPaymentMethod extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/terminal/readers/{reader}/present_payment_method [operationId: PostTestHelpersTerminalReadersReaderPresentPaymentMethod] */
    /**
     * Simulate presenting a payment method
     *
     * <p>Presents a payment method on a simulated reader. Can be used to simulate accepting a payment, saving a card or refunding a transaction.</p>
     */
    public static function post(string $reader, ?\StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod\Post $payload = null): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Terminal\Readers\ByReader\PresentPaymentMethod::class)->post($reader, $payload);
    }
}
