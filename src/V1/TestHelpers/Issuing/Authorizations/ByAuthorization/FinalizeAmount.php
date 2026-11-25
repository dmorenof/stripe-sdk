<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Authorizations\ByAuthorization;

final class FinalizeAmount extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/authorizations/{authorization}/finalize_amount [operationId: PostTestHelpersIssuingAuthorizationsAuthorizationFinalizeAmount] */
    /**
     * Finalize a test-mode authorization's amount
     *
     * <p>Finalize the amount on an Authorization prior to capture, when the initial authorization was for an estimated amount.</p>
     */
    public static function post(string $authorization, \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount\Post $payload): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount::class)->post($authorization, $payload);
    }
}
