<?php

declare(strict_types=1);

namespace StripeSDK\V1\Charges\ByCharge\Dispute;

final class Close extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/charges/{charge}/dispute/close [operationId: PostChargesChargeDisputeClose] */
    public static function post(string $charge, ?\StripeSDK\Requests\V1\Charges\ByCharge\Dispute\Close\Post $payload = null): \StripeSDK\DTOs\Dispute|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Charges\ByCharge\Dispute\Close::class)->post($charge, $payload);
    }
}
