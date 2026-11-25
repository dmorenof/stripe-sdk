<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal\Readers\ByReader;

final class CancelAction extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/readers/{reader}/cancel_action [operationId: PostTerminalReadersReaderCancelAction] */
    /**
     * Cancel the current reader action
     *
     * <p>Cancels the current reader action. See <a href="/docs/terminal/payments/collect-card-payment?terminal-sdk-platform=server-driven#programmatic-cancellation">Programmatic Cancellation</a> for more details.</p>
     */
    public static function post(string $reader, ?\StripeSDK\Requests\V1\Terminal\Readers\ByReader\CancelAction\Post $payload = null): \StripeSDK\Responses\V1\Terminal\Readers\ByReader\CancelAction\PostStatus200\CancelActionPostStatus200Response|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Readers\ByReader\CancelAction::class)->post($reader, $payload);
    }
}
