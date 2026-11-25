<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Authorizations\ByAuthorization;

final class Increment extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/authorizations/{authorization}/increment [operationId: PostTestHelpersIssuingAuthorizationsAuthorizationIncrement] */
    /**
     * Increment a test-mode authorization
     *
     * <p>Increment a test-mode Authorization.</p>
     */
    public static function post(string $authorization, \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Increment\Post $payload): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Increment::class)->post($authorization, $payload);
    }
}
