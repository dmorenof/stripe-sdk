<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal\Readers\ByReader;

final class ProcessSetupIntent extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/readers/{reader}/process_setup_intent [operationId: PostTerminalReadersReaderProcessSetupIntent] */
    /**
     * Hand-off a SetupIntent to a Reader
     *
     * <p>Initiates a SetupIntent flow on a Reader. See <a href="/docs/terminal/features/saving-payment-details/save-directly">Save directly without charging</a> for more details.</p>
     */
    public static function post(string $reader, \StripeSDK\Requests\V1\Terminal\Readers\ByReader\ProcessSetupIntent\Post $payload): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers\ByReader\ProcessSetupIntent::class)->post($reader, $payload);
    }
}
