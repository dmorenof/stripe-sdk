<?php

declare(strict_types=1);

namespace StripeSDK\V1\Subscriptions\BySubscription;

final class Resume extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/subscriptions/{subscription}/resume [operationId: PostSubscriptionsSubscriptionResume] */
    /**
     * Resume a subscription
     *
     * <p>Initiates resumption of a paused subscription, optionally resetting the billing cycle anchor and creating prorations. Resume is only available for subscriptions that use <code>charge_automatically</code> collection. If Stripe doesn’t generate a resumption invoice, the subscription becomes <code>active</code> immediately. When a resumption invoice is generated, Stripe finalizes it immediately. If the invoice is paid or marked uncollectible, the subscription becomes <code>active</code>. If the invoice is manually voided, the subscription stays <code>paused</code>. If there is no payment attempt within 23 hours, Stripe voids the invoice and the subscription stays <code>paused</code>. Learn more about <a href="/docs/billing/subscriptions/pause#resume-subscriptions">resuming subscriptions</a>.</p>
     */
    public static function post(string $subscription, ?\StripeSDK\Requests\V1\Subscriptions\BySubscription\Resume\Post $payload = null): \StripeSDK\DTOs\Subscription|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Subscriptions\BySubscription\Resume::class)->post($subscription, $payload);
    }
}
