<?php

declare(strict_types=1);

namespace StripeSDK\V1\Subscriptions\BySubscription;

final class Migrate extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/subscriptions/{subscription}/migrate [operationId: PostSubscriptionsSubscriptionMigrate] */
    /**
     * Migrate a subscription
     *
     * <p>Upgrade the billing_mode of an existing subscription.</p>
     */
    public static function post(string $subscription, \StripeSDK\Requests\V1\Subscriptions\BySubscription\Migrate\Post $payload): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Subscriptions\BySubscription\Migrate::class)->post($subscription, $payload);
    }
}
