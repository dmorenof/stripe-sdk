<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal\Readers\ByReader;

final class CollectInputs extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/readers/{reader}/collect_inputs [operationId: PostTerminalReadersReaderCollectInputs] */
    /**
     * Collect inputs using a Reader
     *
     * <p>Initiates an <a href="/docs/terminal/features/collect-inputs">input collection flow</a> on a Reader to display input forms and collect information from your customers.</p>
     */
    public static function post(string $reader, \StripeSDK\Requests\V1\Terminal\Readers\ByReader\CollectInputs\Post $payload): \StripeSDK\DTOs\Terminal\Reader|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers\ByReader\CollectInputs::class)->post($reader, $payload);
    }
}
