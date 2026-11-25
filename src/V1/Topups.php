<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Topups extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/topups [operationId: GetTopups] */
    /**
     * List all top-ups
     *
     * <p>Returns a list of top-ups.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Topups $params = null): \StripeSDK\Responses\V1\Topups\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Topups::class)->get($params);
    }

    /** POST /v1/topups [operationId: PostTopups] */
    /**
     * Create a top-up
     *
     * <p>Top up the balance of an account</p>
     */
    public static function post(\StripeSDK\Requests\V1\Topups\Post $payload): \StripeSDK\DTOs\Topup|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Topups::class)->post($payload);
    }

    /** GET /v1/topups/{topup} [operationId: GetTopupsTopup] */
    /**
     * Retrieve a top-up
     *
     * <p>Retrieves the details of a top-up that has previously been created. Supply the unique top-up ID that was returned from your previous request, and Stripe will return the corresponding top-up information.</p>
     */
    public static function getByTopup(string $topup, ?\StripeSDK\GetParams\V1\Topups\ByTopup $params = null): \StripeSDK\DTOs\Topup|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Topups::class)->getByTopup($topup, $params);
    }

    /** POST /v1/topups/{topup} [operationId: PostTopupsTopup] */
    /**
     * Update a top-up
     *
     * <p>Updates the metadata of a top-up. Other top-up details are not editable by design.</p>
     */
    public static function postByTopup(string $topup, ?\StripeSDK\Requests\V1\Topups\ByTopup\Post $payload = null): \StripeSDK\DTOs\Topup|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Topups::class)->postByTopup($topup, $payload);
    }
}
