<?php

declare(strict_types=1);

namespace StripeSDK\V1\Checkout;

final class Sessions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/checkout/sessions [operationId: GetCheckoutSessions] */
    /**
     * List all Checkout Sessions
     *
     * <p>Returns a list of Checkout Sessions.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Checkout\Sessions $params = null): \StripeSDK\Responses\V1\Checkout\Sessions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Checkout\Sessions::class)->get($params);
    }

    /** POST /v1/checkout/sessions [operationId: PostCheckoutSessions] */
    /**
     * Create a Checkout Session
     *
     * <p>Creates a Checkout Session object.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Checkout\Sessions\Post $payload = null): \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Checkout\Sessions::class)->post($payload);
    }

    /** GET /v1/checkout/sessions/{session} [operationId: GetCheckoutSessionsSession] */
    /**
     * Retrieve a Checkout Session
     *
     * <p>Retrieves a Checkout Session object.</p>
     */
    public static function getBySession(string $session, ?\StripeSDK\GetParams\V1\Checkout\Sessions\BySession $params = null): \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Checkout\Sessions::class)->getBySession($session, $params);
    }

    /** POST /v1/checkout/sessions/{session} [operationId: PostCheckoutSessionsSession] */
    /**
     * Update a Checkout Session
     *
     * <p>Updates a Checkout Session object.</p>
     *
     * <p>Related guide: <a href="/payments/advanced/dynamic-updates">Dynamically update a Checkout Session</a></p>
     */
    public static function postBySession(string $session, ?\StripeSDK\Requests\V1\Checkout\Sessions\BySession\Post $payload = null): \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Checkout\Sessions::class)->postBySession($session, $payload);
    }
}
