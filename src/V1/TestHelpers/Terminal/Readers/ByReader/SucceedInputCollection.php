<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Terminal\Readers\ByReader;

final class SucceedInputCollection extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/terminal/readers/{reader}/succeed_input_collection [operationId: PostTestHelpersTerminalReadersReaderSucceedInputCollection] */
    /**
     * Simulate a successful input collection
     *
     * <p>Use this endpoint to trigger a successful input collection on a simulated reader.</p>
     */
    public static function post(string $reader, ?\StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\SucceedInputCollection\Post $payload = null): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Terminal\Readers\ByReader\SucceedInputCollection::class)->post($reader, $payload);
    }
}
