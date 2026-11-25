<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal\Readers\ByReader;

final class SetReaderDisplay extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/readers/{reader}/set_reader_display [operationId: PostTerminalReadersReaderSetReaderDisplay] */
    /**
     * Set reader display
     *
     * <p>Sets the reader display to show <a href="/docs/terminal/features/display">cart details</a>.</p>
     */
    public static function post(string $reader, \StripeSDK\Requests\V1\Terminal\Readers\ByReader\SetReaderDisplay\Post $payload): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers\ByReader\SetReaderDisplay::class)->post($reader, $payload);
    }
}
