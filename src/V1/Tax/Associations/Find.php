<?php

declare(strict_types=1);

namespace StripeSDK\V1\Tax\Associations;

final class Find extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/tax/associations/find [operationId: GetTaxAssociationsFind] */
    /**
     * Find a Tax Association
     *
     * <p>Finds a tax association object by PaymentIntent id.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Tax\Associations\Find $params): \StripeSDK\DTOs\Tax\Association|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Tax\Associations\Find::class)->get($params);
    }
}
