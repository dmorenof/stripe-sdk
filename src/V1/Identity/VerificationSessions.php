<?php

declare(strict_types=1);

namespace StripeSDK\V1\Identity;

final class VerificationSessions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/identity/verification_sessions [operationId: GetIdentityVerificationSessions] */
    /**
     * List VerificationSessions
     *
     * <p>Returns a list of VerificationSessions</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Identity\VerificationSessions $params = null): \StripeSDK\Responses\V1\Identity\VerificationSessions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Identity\VerificationSessions::class)->get($params);
    }

    /** POST /v1/identity/verification_sessions [operationId: PostIdentityVerificationSessions] */
    /**
     * Create a VerificationSession
     *
     * <p>Creates a VerificationSession object.</p>
     *
     * <p>After the VerificationSession is created, display a verification modal using the session <code>client_secret</code> or send your users to the session’s <code>url</code>.</p>
     *
     * <p>If your API key is in test mode, verification checks won’t actually process, though everything else will occur as if in live mode.</p>
     *
     * <p>Related guide: <a href="/docs/identity/verify-identity-documents">Verify your users’ identity documents</a></p>
     */
    public static function post(?\StripeSDK\Requests\V1\Identity\VerificationSessions\Post $payload = null): \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Identity\VerificationSessions::class)->post($payload);
    }

    /** GET /v1/identity/verification_sessions/{session} [operationId: GetIdentityVerificationSessionsSession] */
    /**
     * Retrieve a VerificationSession
     *
     * <p>Retrieves the details of a VerificationSession that was previously created.</p>
     *
     * <p>When the session status is <code>requires_input</code>, you can use this method to retrieve a valid
     * <code>client_secret</code> or <code>url</code> to allow re-submission.</p>
     */
    public static function getBySession(string $session, ?\StripeSDK\GetParams\V1\Identity\VerificationSessions\BySession $params = null): \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Identity\VerificationSessions::class)->getBySession($session, $params);
    }

    /** POST /v1/identity/verification_sessions/{session} [operationId: PostIdentityVerificationSessionsSession] */
    /**
     * Update a VerificationSession
     *
     * <p>Updates a VerificationSession object.</p>
     *
     * <p>When the session status is <code>requires_input</code>, you can use this method to update the
     * verification check and options.</p>
     */
    public static function postBySession(string $session, ?\StripeSDK\Requests\V1\Identity\VerificationSessions\BySession\Post $payload = null): \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Identity\VerificationSessions::class)->postBySession($session, $payload);
    }
}
