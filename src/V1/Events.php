<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Events extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/events [operationId: GetEvents] */
    /**
     * List all events
     *
     * <p>List events, going back up to 30 days. Each event data is rendered according to Stripe API version at its creation time, specified in <a href="https://docs.stripe.com/api/events/object">event object</a> <code>api_version</code> attribute (not according to your current Stripe API version or <code>Stripe-Version</code> header).</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Events $params = null): \StripeSDK\Responses\V1\Events\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Events::class)->get($params);
    }

    /** GET /v1/events/{id} [operationId: GetEventsId] */
    /**
     * Retrieve an event
     *
     * <p>Retrieves the details of an event if it was created in the last 30 days. Supply the unique identifier of the event, which you might have received in a webhook.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Events\ById $params = null): \StripeSDK\DTOs\Event|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Events::class)->getById($id, $params);
    }
}
