<?php

declare(strict_types=1);

namespace StripeSDK\V1\ThreeDSecure\Authentications\ByAuthentication;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/three_d_secure/authentications/{authentication}/cancel [operationId: PostThreeDSecureAuthenticationsAuthenticationCancel] */
    /**
     * Cancel a 3DS Authentication
     *
     * <p>This endpoint cancels a 3DS Authentication. You can cancel a 3DS Authentication object when it’s in a non-final status:
     * <code>requires_submission</code> or <code>requires_challenge</code>.</p>
     */
    public static function post(string $authentication, ?\StripeSDK\Requests\V1\ThreeDSecure\Authentications\ByAuthentication\Cancel\Post $payload = null): \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ThreeDSecure\Authentications\ByAuthentication\Cancel::class)->post($authentication, $payload);
    }
}
