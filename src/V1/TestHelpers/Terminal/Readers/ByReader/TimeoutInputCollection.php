<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Terminal\Readers\ByReader;

final class TimeoutInputCollection extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/terminal/readers/{reader}/timeout_input_collection [operationId: PostTestHelpersTerminalReadersReaderTimeoutInputCollection] */
    /**
     * Simulate an input collection timeout
     *
     * <p>Use this endpoint to complete an input collection with a timeout error on a simulated reader.</p>
     */
    public static function post(string $reader, ?\StripeSDK\Requests\V1\TestHelpers\Terminal\Readers\ByReader\TimeoutInputCollection\Post $payload = null): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Terminal\Readers\ByReader\TimeoutInputCollection::class)->post($reader, $payload);
    }
}
