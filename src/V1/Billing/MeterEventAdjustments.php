<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing;

final class MeterEventAdjustments extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing/meter_event_adjustments [operationId: PostBillingMeterEventAdjustments] */
    /**
     * Create a billing meter event adjustment
     *
     * <p>Creates a billing meter event adjustment.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Billing\MeterEventAdjustments\Post $payload): \StripeSDK\DTOs\Billing\MeterEventAdjustment|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\MeterEventAdjustments::class)->post($payload);
    }
}
