<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Authorizations\ByAuthorization;

final class Capture extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/authorizations/{authorization}/capture [operationId: PostTestHelpersIssuingAuthorizationsAuthorizationCapture] */
    /**
     * Capture a test-mode authorization
     *
     * <p>Capture a test-mode authorization.</p>
     */
    public static function post(string $authorization, ?\StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture\Post $payload = null): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Capture::class)->post($authorization, $payload);
    }
}
