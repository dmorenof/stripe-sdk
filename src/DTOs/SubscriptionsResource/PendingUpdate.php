<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Pending Update
 *
 * Pending Updates store the changes pending from a previous update that will be applied
 * to the Subscription upon successful payment.
 */
final class PendingUpdate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'expires_at',
    ];

    /**
     * If the update is applied, determines the date of the first full invoice, and, for plans with `month` or `year` intervals, the day of the month for subsequent invoices. The timestamp is in UTC format.
     * Format: unix-time
     */
    public ?int $billing_cycle_anchor;
    /**
     * Indicates whether this subscription should cancel at the end of the current period if the update is applied.
     */
    public ?bool $cancel_at_period_end;
    /**
     * The pending subscription-level discount that will be applied when the pending update is applied.
     */
    public ?\StripeSDK\DTOs\Discount $discount;
    /**
     * The discounts that will be applied to the subscription when the pending update is applied. Use `expand[]=discounts` to expand each discount.
     */
    public ?\StripeSDK\Collections\SubscriptionsResource\PendingUpdate\DiscountsCollection $discounts;
    /**
     * The point after which the changes reflected by this update will be discarded and no longer applied.
     * Format: unix-time
     */
    public int $expires_at;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\SubscriptionsResource\PendingUpdate\MetadataMap $metadata;
    /**
     * List of subscription items, each with an attached plan, that will be set if the update is applied.
     */
    public ?\StripeSDK\Collections\Subscription\Items\DataCollection $subscription_items;
    /**
     * Unix timestamp representing the end of the trial period the customer will get before being charged for the first time, if the update is applied.
     * Format: unix-time
     */
    public ?int $trial_end;
    /**
     * Indicates if a plan's `trial_period_days` should be applied to the subscription. Setting `trial_end` per subscription is preferred, and this defaults to `false`. Setting this flag to `true` together with `trial_end` is not allowed. See [Using trial periods on subscriptions](https://docs.stripe.com/billing/subscriptions/trials/free-trials) to learn more.
     */
    public ?bool $trial_from_plan;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_cycle_anchor' => $value === null || is_int($value) ? $this->billing_cycle_anchor = $value : parent::assignMember($name, $value),
            'cancel_at_period_end' => $value === null || is_bool($value) ? $this->cancel_at_period_end = $value : parent::assignMember($name, $value),
            'discount' => $value === null || $value instanceof \stdClass ? $this->discount = $value === null ? null : new \StripeSDK\DTOs\Discount($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'subscription_items' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->subscription_items = $value === null ? null : new \StripeSDK\Collections\Subscription\Items\DataCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Subscription\Item::class)) : parent::assignMember($name, $value),
            'trial_end' => $value === null || is_int($value) ? $this->trial_end = $value : parent::assignMember($name, $value),
            'trial_from_plan' => $value === null || is_bool($value) ? $this->trial_from_plan = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
