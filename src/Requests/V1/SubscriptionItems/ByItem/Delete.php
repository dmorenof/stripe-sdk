<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionItems\ByItem;

final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Delete all usage for the given subscription item. Allowed only when the current plan's `usage_type` is `metered`.
     */
    public bool $clear_usage;
    /**
     * Controls how Stripe handles payment when a subscription update requires payment and `collection_method=charge_automatically`.
     */
    public \StripeSDK\Enums\V1\SubscriptionItems\ByItem\Delete\PaymentBehaviorEnum $payment_behavior;
    /**
     * Determines how to handle [prorations](https://docs.stripe.com/billing/subscriptions/prorations) when the billing cycle changes (e.g., when switching plans, resetting `billing_cycle_anchor=now`, or starting a trial), or if an item's `quantity` changes. The default value is `create_prorations`.
     */
    public \StripeSDK\Enums\V1\SubscriptionItems\ByItem\Delete\ProrationBehaviorEnum $proration_behavior;
    /**
     * If set, the proration will be calculated as though the subscription was updated at the given time. This can be used to apply the same proration that was previewed with the [upcoming invoice](/api/invoices/create_preview) endpoint.
     * Format: unix-time
     */
    public int $proration_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'clear_usage' => is_bool($value) ? $this->clear_usage = $value : parent::assignMember($name, $value),
            'payment_behavior' => is_string($value) ? $this->payment_behavior = \StripeSDK\Enums\V1\SubscriptionItems\ByItem\Delete\PaymentBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\SubscriptionItems\ByItem\Delete\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'proration_date' => is_int($value) ? $this->proration_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
