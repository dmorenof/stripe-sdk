<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class LinkAccountSessions extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/link_account_sessions [operationId: PostLinkAccountSessions] */
    /**
     * Create a Session
     *
     * <p>To launch the Financial Connections authorization flow, create a <code>Session</code>. The session’s <code>client_secret</code> can be used to launch the flow using Stripe.js.</p>
     */
    public static function post(\StripeSDK\Requests\V1\LinkAccountSessions\Post $payload): \StripeSDK\DTOs\FinancialConnections\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\LinkAccountSessions::class)->post($payload);
    }

    /** GET /v1/link_account_sessions/{session} [operationId: GetLinkAccountSessionsSession] */
    /**
     * Retrieve a Session
     *
     * <p>Retrieves the details of a Financial Connections <code>Session</code></p>
     */
    public static function getBySession(string $session, ?\StripeSDK\GetParams\V1\LinkAccountSessions\BySession $params = null): \StripeSDK\DTOs\FinancialConnections\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\LinkAccountSessions::class)->getBySession($session, $params);
    }
}
