<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing;

final class Cardholders extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/issuing/cardholders [operationId: GetIssuingCardholders] */
    /**
     * List all cardholders
     *
     * <p>Returns a list of Issuing <code>Cardholder</code> objects. The objects are sorted in descending order by creation date, with the most recently created object appearing first.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Issuing\Cardholders $params = null): \StripeSDK\Responses\V1\Issuing\Cardholders\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Cardholders::class)->get($params);
    }

    /** POST /v1/issuing/cardholders [operationId: PostIssuingCardholders] */
    /**
     * Create a cardholder
     *
     * <p>Creates a new Issuing <code>Cardholder</code> object that can be issued cards.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Issuing\Cardholders\Post $payload): \StripeSDK\DTOs\Issuing\Cardholder|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Cardholders::class)->post($payload);
    }

    /** GET /v1/issuing/cardholders/{cardholder} [operationId: GetIssuingCardholdersCardholder] */
    /**
     * Retrieve a cardholder
     *
     * <p>Retrieves an Issuing <code>Cardholder</code> object.</p>
     */
    public static function getByCardholder(string $cardholder, ?\StripeSDK\GetParams\V1\Issuing\Cardholders\ByCardholder $params = null): \StripeSDK\DTOs\Issuing\Cardholder|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Cardholders::class)->getByCardholder($cardholder, $params);
    }

    /** POST /v1/issuing/cardholders/{cardholder} [operationId: PostIssuingCardholdersCardholder] */
    /**
     * Update a cardholder
     *
     * <p>Updates the specified Issuing <code>Cardholder</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public static function postByCardholder(string $cardholder, ?\StripeSDK\Requests\V1\Issuing\Cardholders\ByCardholder\Post $payload = null): \StripeSDK\DTOs\Issuing\Cardholder|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Cardholders::class)->postByCardholder($cardholder, $payload);
    }
}
