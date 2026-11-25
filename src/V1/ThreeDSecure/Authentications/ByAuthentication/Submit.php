<?php

declare(strict_types=1);

namespace StripeSDK\V1\ThreeDSecure\Authentications\ByAuthentication;

final class Submit extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/three_d_secure/authentications/{authentication}/submit [operationId: PostThreeDSecureAuthenticationsAuthenticationSubmit] */
    /**
     * Submit a 3DS Authentication
     *
     * <p>This endpoint submits a 3DS Authentication. You can submit a 3DS Authentication object when it has status <code>requires_submission</code>. Refer to the <a href="/payments/3d-secure/standalone-3d-secure#submit-the-3ds-authentication-object">Submit the 3DS Authentication object section of the Standalone 3DS guide</a> for more information.</p>
     */
    public static function post(string $authentication, ?\StripeSDK\Requests\V1\ThreeDSecure\Authentications\ByAuthentication\Submit\Post $payload = null): \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ThreeDSecure\Authentications\ByAuthentication\Submit::class)->post($authentication, $payload);
    }
}
