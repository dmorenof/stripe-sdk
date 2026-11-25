<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing;

final class Tokens extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/issuing/tokens [operationId: GetIssuingTokens] */
    /**
     * List all issuing tokens for card
     *
     * <p>Lists all Issuing <code>Token</code> objects for a given card.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Issuing\Tokens $params): \StripeSDK\Responses\V1\Issuing\Tokens\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Tokens::class)->get($params);
    }

    /** GET /v1/issuing/tokens/{token} [operationId: GetIssuingTokensToken] */
    /**
     * Retrieve an issuing token
     *
     * <p>Retrieves an Issuing <code>Token</code> object.</p>
     */
    public static function getByToken(string $token, ?\StripeSDK\GetParams\V1\Issuing\Tokens\ByToken $params = null): \StripeSDK\DTOs\Issuing\Token|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Tokens::class)->getByToken($token, $params);
    }

    /** POST /v1/issuing/tokens/{token} [operationId: PostIssuingTokensToken] */
    /**
     * Update a token status
     *
     * <p>Attempts to update the specified Issuing <code>Token</code> object to the status specified.</p>
     */
    public static function postByToken(string $token, \StripeSDK\Requests\V1\Issuing\Tokens\ByToken\Post $payload): \StripeSDK\DTOs\Issuing\Token|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Tokens::class)->postByToken($token, $payload);
    }
}
