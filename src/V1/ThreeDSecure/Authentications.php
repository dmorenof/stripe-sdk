<?php

declare(strict_types=1);

namespace StripeSDK\V1\ThreeDSecure;

final class Authentications extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/three_d_secure/authentications [operationId: GetThreeDSecureAuthentications] */
    /**
     * List all 3D Secure Authentications
     *
     * <p>Returns a list of 3D Secure Authentications.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\ThreeDSecure\Authentications $params = null): \StripeSDK\Responses\V1\ThreeDSecure\Authentications\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ThreeDSecure\Authentications::class)->get($params);
    }

    /** POST /v1/three_d_secure/authentications [operationId: PostThreeDSecureAuthentications] */
    /**
     * Create a 3DS Authentication
     *
     * <p>This endpoint creates a 3DS Authentication. Refer to the <a href="/payments/3d-secure/standalone-3d-secure#create-a-3ds-authentication-object">Create a 3DS Authentication object section of the Standalone 3DS guide</a> for more information.</p>
     *
     * <p>You can pass the submit parameter to automatically submit the 3DS Authentication object when you create it. Refer to the <a href="/payments/3d-secure/standalone-3d-secure#submit-at-creation">Submit at creation section of the Standalone 3DS guide</a> for more information.</p>
     */
    public static function post(\StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post $payload): \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ThreeDSecure\Authentications::class)->post($payload);
    }

    /** GET /v1/three_d_secure/authentications/{authentication} [operationId: GetThreeDSecureAuthenticationsAuthentication] */
    /**
     * Retrieve a 3DS Authentication
     *
     * <p>This endpoint retrieves a 3DS Authentication.</p>
     */
    public static function getByAuthentication(string $authentication, ?\StripeSDK\GetParams\V1\ThreeDSecure\Authentications\ByAuthentication $params = null): \StripeSDK\DTOs\ThreeDSecure\Authentication|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ThreeDSecure\Authentications::class)->getByAuthentication($authentication, $params);
    }
}
