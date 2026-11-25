<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Tokens extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/tokens [operationId: PostTokens] */
    /**
     * Create a bank account token
     *
     * <p>Creates a single-use token that represents a bank account’s details.
     * You can use this token with any v1 API method in place of a bank account dictionary. You can only use this token once. To do so, attach it to a <a href="#accounts">connected account</a> where <a href="/api/accounts/object#account_object-controller-requirement_collection">controller.requirement_collection</a> is <code>application</code>, which includes Custom accounts.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Tokens\Post $payload = null): \StripeSDK\DTOs\Token|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tokens::class)->post($payload);
    }

    /** GET /v1/tokens/{token} [operationId: GetTokensToken] */
    /**
     * Retrieve a token
     *
     * <p>Retrieves the token with the given ID.</p>
     */
    public static function getByToken(string $token, ?\StripeSDK\GetParams\V1\Tokens\ByToken $params = null): \StripeSDK\DTOs\Token|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tokens::class)->getByToken($token, $params);
    }
}
