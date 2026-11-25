<?php

declare(strict_types=1);

namespace StripeSDK\V1\Issuing;

final class Settlements extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/issuing/settlements/{settlement} [operationId: GetIssuingSettlementsSettlement] */
    /**
     * Retrieve a settlement
     *
     * <p>Retrieves an Issuing <code>Settlement</code> object.</p>
     */
    public static function getBySettlement(string $settlement, ?\StripeSDK\GetParams\V1\Issuing\Settlements\BySettlement $params = null): \StripeSDK\DTOs\Issuing\Settlement|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Settlements::class)->getBySettlement($settlement, $params);
    }

    /** POST /v1/issuing/settlements/{settlement} [operationId: PostIssuingSettlementsSettlement] */
    /**
     * Update a settlement
     *
     * <p>Updates the specified Issuing <code>Settlement</code> object by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     */
    public static function postBySettlement(string $settlement, ?\StripeSDK\Requests\V1\Issuing\Settlements\BySettlement\Post $payload = null): \StripeSDK\DTOs\Issuing\Settlement|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Issuing\Settlements::class)->postBySettlement($settlement, $payload);
    }
}
