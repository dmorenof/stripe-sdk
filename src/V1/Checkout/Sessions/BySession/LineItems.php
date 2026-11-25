<?php

declare(strict_types=1);

namespace StripeSDK\V1\Checkout\Sessions\BySession;

final class LineItems extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/checkout/sessions/{session}/line_items [operationId: GetCheckoutSessionsSessionLineItems] */
    /**
     * Retrieve a Checkout Session's line items
     *
     * <p>When retrieving a Checkout Session, there is an includable <strong>line_items</strong> property containing the first handful of those items. There is also a URL where you can retrieve the full (paginated) list of line items.</p>
     */
    public static function get(string $session, ?\StripeSDK\GetParams\V1\Checkout\Sessions\BySession\LineItems $params = null): \StripeSDK\Responses\V1\Checkout\Sessions\BySession\LineItems\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Checkout\Sessions\BySession\LineItems::class)->get($session, $params);
    }
}
