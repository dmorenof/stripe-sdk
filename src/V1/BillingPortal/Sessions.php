<?php

declare(strict_types=1);

namespace StripeSDK\V1\BillingPortal;

final class Sessions extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing_portal/sessions [operationId: PostBillingPortalSessions] */
    /**
     * Create a portal session
     *
     * <p>Creates a session of the customer portal.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\BillingPortal\Sessions\Post $payload = null): \StripeSDK\DTOs\BillingPortal\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\BillingPortal\Sessions::class)->post($payload);
    }
}
