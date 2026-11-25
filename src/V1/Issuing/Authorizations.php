<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing;

final class Authorizations extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/issuing/authorizations [operationId: GetIssuingAuthorizations] */
    /**
     * List all authorizations
     *
     * <p>Returns a list of Issuing <code>Authorization</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Issuing\Authorizations $params = null): \StripeSDK\Responses\V1\Issuing\Authorizations\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Authorizations::class)->get($params);
    }

    /** GET /v1/issuing/authorizations/{authorization} [operationId: GetIssuingAuthorizationsAuthorization] */
    /**
     * Retrieve an authorization
     *
     * <p>Retrieves an Issuing <code>Authorization</code> object.</p>
     */
    public static function getByAuthorization(string $authorization, ?\StripeSDK\GetParams\V1\Issuing\Authorizations\ByAuthorization $params = null): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Authorizations::class)->getByAuthorization($authorization, $params);
    }

    /** POST /v1/issuing/authorizations/{authorization} [operationId: PostIssuingAuthorizationsAuthorization] */
    /**
     * Update an authorization
     *
     * <p>Updates the specified Issuing <code>Authorization</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public static function postByAuthorization(string $authorization, ?\StripeSDK\Requests\V1\Issuing\Authorizations\ByAuthorization\Post $payload = null): \StripeSDK\DTOs\Issuing\Authorization|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Authorizations::class)->postByAuthorization($authorization, $payload);
    }
}
