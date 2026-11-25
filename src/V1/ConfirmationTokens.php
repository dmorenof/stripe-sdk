<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class ConfirmationTokens extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/confirmation_tokens/{confirmation_token} [operationId: GetConfirmationTokensConfirmationToken] */
    /**
     * Retrieve a ConfirmationToken
     *
     * <p>Retrieves an existing ConfirmationToken object</p>
     */
    public static function getByConfirmationToken(string $confirmation_token, ?\StripeSDK\GetParams\V1\ConfirmationTokens\ByConfirmationToken $params = null): \StripeSDK\DTOs\ConfirmationToken|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ConfirmationTokens::class)->getByConfirmationToken($confirmation_token, $params);
    }
}
