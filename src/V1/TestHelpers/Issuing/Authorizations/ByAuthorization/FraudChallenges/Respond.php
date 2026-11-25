<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FraudChallenges;

final class Respond extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/issuing/authorizations/{authorization}/fraud_challenges/respond [operationId: PostTestHelpersIssuingAuthorizationsAuthorizationFraudChallengesRespond] */
    /**
     * Respond to fraud challenge
     *
     * <p>Respond to a fraud challenge on a testmode Issuing authorization, simulating either a confirmation of fraud or a correction of legitimacy.</p>
     */
    public static function post(string $authorization, \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FraudChallenges\Respond\Post $payload): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FraudChallenges\Respond::class)->post($authorization, $payload);
    }
}
