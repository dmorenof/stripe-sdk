<?php

declare(strict_types=1);

namespace StripeSDK\V1\Terminal;

final class ConnectionTokens extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/terminal/connection_tokens [operationId: PostTerminalConnectionTokens] */
    /**
     * Create a Connection Token
     *
     * <p>To connect to a reader the Stripe Terminal SDK needs to retrieve a short-lived connection token from Stripe, proxied through your server. On your backend, add an endpoint that creates and returns a connection token.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Terminal\ConnectionTokens\Post $payload = null): \StripeSDK\DTOs\Terminal\ConnectionToken|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Terminal\ConnectionTokens::class)->post($payload);
    }
}
