<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing\Meters\ById;

final class Deactivate extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing/meters/{id}/deactivate [operationId: PostBillingMetersIdDeactivate] */
    /**
     * Deactivate a billing meter
     *
     * <p>When a meter is deactivated, no more meter events will be accepted for this meter. You can’t attach a deactivated meter to a price.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Billing\Meters\ById\Deactivate\Post $payload = null): \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Meters\ById\Deactivate::class)->post($id, $payload);
    }
}
