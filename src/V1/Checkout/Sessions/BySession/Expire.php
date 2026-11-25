<?php

declare(strict_types=1);

namespace StripeSDK\V1\Checkout\Sessions\BySession;

final class Expire extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/checkout/sessions/{session}/expire [operationId: PostCheckoutSessionsSessionExpire] */
    /**
     * Expire a Checkout Session
     *
     * <p>A Checkout Session can be expired when it is in one of these statuses: <code>open</code> </p>
     *
     * <p>After it expires, a customer can’t complete a Checkout Session and customers loading the Checkout Session see a message saying the Checkout Session is expired.</p>
     */
    public static function post(string $session, ?\StripeSDK\Requests\V1\Checkout\Sessions\BySession\Expire\Post $payload = null): \StripeSDK\DTOs\Checkout\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Checkout\Sessions\BySession\Expire::class)->post($session, $payload);
    }
}
