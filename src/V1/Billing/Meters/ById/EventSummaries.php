<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing\Meters\ById;

final class EventSummaries extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/billing/meters/{id}/event_summaries [operationId: GetBillingMetersIdEventSummaries] */
    /**
     * List billing meter event summaries
     *
     * <p>Retrieve a list of billing meter event summaries.</p>
     */
    public static function get(string $id, \StripeSDK\GetParams\V1\Billing\Meters\ById\EventSummaries $params): \StripeSDK\Responses\V1\Billing\Meters\ById\EventSummaries\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Meters\ById\EventSummaries::class)->get($id, $params);
    }
}
