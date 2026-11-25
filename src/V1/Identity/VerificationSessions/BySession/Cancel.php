<?php

declare(strict_types=1);

namespace StripeSDK\V1\Identity\VerificationSessions\BySession;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/identity/verification_sessions/{session}/cancel [operationId: PostIdentityVerificationSessionsSessionCancel] */
    /**
     * Cancel a VerificationSession
     *
     * <p>A VerificationSession object can be canceled when it is in <code>requires_input</code> <a href="/docs/identity/how-sessions-work">status</a>.</p>
     *
     * <p>Once canceled, future submission attempts are disabled. This cannot be undone. <a href="/docs/identity/verification-sessions#cancel">Learn more</a>.</p>
     */
    public static function post(string $session, ?\StripeSDK\Requests\V1\Identity\VerificationSessions\BySession\Cancel\Post $payload = null): \StripeSDK\DTOs\Identity\VerificationSession|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Identity\VerificationSessions\BySession\Cancel::class)->post($session, $payload);
    }
}
