<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing\Meters\ById;

final class Reactivate extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing/meters/{id}/reactivate [operationId: PostBillingMetersIdReactivate] */
    /**
     * Reactivate a billing meter
     *
     * <p>When a meter is reactivated, events for this meter can be accepted and you can attach the meter to a price.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Billing\Meters\ById\Reactivate\Post $payload = null): \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Meters\ById\Reactivate::class)->post($id, $payload);
    }
}
