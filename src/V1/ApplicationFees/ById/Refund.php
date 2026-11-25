<?php

declare(strict_types=1);

namespace StripeSDK\V1\ApplicationFees\ById;

final class Refund extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/application_fees/{id}/refund [operationId: PostApplicationFeesIdRefund] */
    public static function post(string $id, ?\StripeSDK\Requests\V1\ApplicationFees\ById\Refund\Post $payload = null): \StripeSDK\DTOs\ApplicationFee|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ApplicationFees\ById\Refund::class)->post($id, $payload);
    }
}
