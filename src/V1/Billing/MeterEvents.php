<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing;

final class MeterEvents extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing/meter_events [operationId: PostBillingMeterEvents] */
    /**
     * Create a billing meter event
     *
     * <p>Creates a billing meter event.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Billing\MeterEvents\Post $payload): \StripeSDK\DTOs\Billing\MeterEvent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\MeterEvents::class)->post($payload);
    }
}
