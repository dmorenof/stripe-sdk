<?php

declare(strict_types=1);

namespace StripeSDK\V1\Subscriptions\BySubscription;

final class Pause extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/subscriptions/{subscription}/pause [operationId: PostSubscriptionsSubscriptionPause] */
    /**
     * Pause a subscription
     *
     * <p>Pauses a subscription by transitioning it to the paused status. A paused subscription does not generate invoices and will not advance to new billing periods. The subscription can be resumed later using the resume endpoint. Cannot pause subscriptions with attached schedules.</p>
     */
    public static function post(string $subscription, ?\StripeSDK\Requests\V1\Subscriptions\BySubscription\Pause\Post $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Subscriptions\BySubscription\Pause::class)->post($subscription, $payload);
    }
}
