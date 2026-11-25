<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class CustomerSessions extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/customer_sessions [operationId: PostCustomerSessions] */
    /**
     * Create a Customer Session
     *
     * <p>Creates a Customer Session object that includes a single-use client secret that you can use on your front-end to grant client-side API access for certain customer resources.</p>
     */
    public static function post(\StripeSDK\Requests\V1\CustomerSessions\Post $payload): \StripeSDK\DTOs\Customer\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\CustomerSessions::class)->post($payload);
    }
}
