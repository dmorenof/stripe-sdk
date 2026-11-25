<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal;

final class Refunds extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/refunds [operationId: PostTerminalRefunds] */
    /**
     * Create a refund using a Terminal-supported device.
     *
     * <p>Internal endpoint for terminal use to create a refund for a card_present or card charge.</p>
     *
     * <p>You can optionally refund only part of a charge.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Terminal\Refunds\Post $payload = null): \StripeSDK\DTOs\Terminal\Refund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\Refunds::class)->post($payload);
    }
}
