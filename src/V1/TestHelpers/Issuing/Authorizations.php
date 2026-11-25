<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing;

final class Authorizations extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/authorizations [operationId: PostTestHelpersIssuingAuthorizations] */
    /**
     * Create a test-mode authorization
     *
     * <p>Create a test-mode authorization.</p>
     */
    public static function post(\StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\Post $payload): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Authorizations::class)->post($payload);
    }
}
