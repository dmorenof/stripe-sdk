<?php

declare(strict_types=1);

namespace StripeSDK\V1\Charges\ByCharge;

final class Dispute extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/charges/{charge}/dispute [operationId: GetChargesChargeDispute] */
    /**
     * <p>Retrieve a dispute for a specified charge.</p>
     */
    public static function get(string $charge, ?\StripeSDK\GetParams\V1\Charges\ByCharge\Dispute $params = null): \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges\ByCharge\Dispute::class)->get($charge, $params);
    }

    /** POST /v1/charges/{charge}/dispute [operationId: PostChargesChargeDispute] */
    public static function post(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Dispute\Post $payload = null): \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges\ByCharge\Dispute::class)->post($charge, $payload);
    }
}
