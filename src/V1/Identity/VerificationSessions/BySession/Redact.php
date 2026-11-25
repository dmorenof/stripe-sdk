<?php

declare(strict_types=1);

namespace StripeSDK\V1\Identity\VerificationSessions\BySession;

final class Redact extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/identity/verification_sessions/{session}/redact [operationId: PostIdentityVerificationSessionsSessionRedact] */
    /**
     * Redact a VerificationSession
     *
     * <p>Redact a VerificationSession to remove all collected information from Stripe. This will redact
     * the VerificationSession and all objects related to it, including VerificationReports, Events,
     * request logs, etc.</p>
     *
     * <p>A VerificationSession object can be redacted when it is in <code>requires_input</code> or <code>verified</code>
     * <a href="/docs/identity/how-sessions-work">status</a>. Redacting a VerificationSession in <code>requires_action</code>
     * state will automatically cancel it.</p>
     *
     * <p>The redaction process may take up to four days. When the redaction process is in progress, the
     * VerificationSession’s <code>redaction.status</code> field will be set to <code>processing</code>; when the process is
     * finished, it will change to <code>redacted</code> and an <code>identity.verification_session.redacted</code> event
     * will be emitted.</p>
     *
     * <p>Redaction is irreversible. Redacted objects are still accessible in the Stripe API, but all the
     * fields that contain personal data will be replaced by the string <code>[redacted]</code> or a similar
     * placeholder. The <code>metadata</code> field will also be erased. Redacted objects cannot be updated or
     * used for any purpose.</p>
     *
     * <p><a href="/docs/identity/verification-sessions#redact">Learn more</a>.</p>
     */
    public static function post(string $session, ?\StripeSDK\Requests\V1\Identity\VerificationSessions\BySession\Redact\Post $payload = null): \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Identity\VerificationSessions\BySession\Redact::class)->post($session, $payload);
    }
}
