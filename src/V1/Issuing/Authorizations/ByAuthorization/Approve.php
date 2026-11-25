<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing\Authorizations\ByAuthorization;

final class Approve extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/issuing/authorizations/{authorization}/approve [operationId: PostIssuingAuthorizationsAuthorizationApprove] */
    /**
     * Approve an authorization
     *
     * <p>[Deprecated] Approves a pending Issuing <code>Authorization</code> object. This request should be made within the timeout window of the <a href="/docs/issuing/controls/real-time-authorizations">real-time authorization</a> flow.
     * This method is deprecated. Instead, <a href="/docs/issuing/controls/real-time-authorizations#authorization-handling">respond directly to the webhook request to approve an authorization</a>.</p>
     *
     * @deprecated
     */
    public static function post(string $authorization, ?\StripeSDK\Requests\V1\Issuing\Authorizations\ByAuthorization\Approve\Post $payload = null): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Authorizations\ByAuthorization\Approve::class)->post($authorization, $payload);
    }
}
