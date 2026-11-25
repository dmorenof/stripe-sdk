<?php

declare(strict_types=1);

namespace StripeSDK\V1\FinancialConnections;

final class Sessions extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/financial_connections/sessions [operationId: PostFinancialConnectionsSessions] */
    /**
     * Create a Session
     *
     * <p>To launch the Financial Connections authorization flow, create a <code>Session</code>. The session’s <code>client_secret</code> can be used to launch the flow using Stripe.js.</p>
     */
    public static function post(\StripeSDK\Requests\V1\FinancialConnections\Sessions\Post $payload): \StripeSDK\DTOs\FinancialConnections\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FinancialConnections\Sessions::class)->post($payload);
    }

    /** GET /v1/financial_connections/sessions/{session} [operationId: GetFinancialConnectionsSessionsSession] */
    /**
     * Retrieve a Session
     *
     * <p>Retrieves the details of a Financial Connections <code>Session</code></p>
     */
    public static function getBySession(string $session, ?\StripeSDK\GetParams\V1\FinancialConnections\Sessions\BySession $params = null): \StripeSDK\DTOs\FinancialConnections\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FinancialConnections\Sessions::class)->getBySession($session, $params);
    }
}
