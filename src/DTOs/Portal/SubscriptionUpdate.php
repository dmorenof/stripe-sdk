<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalSubscriptionUpdate
 */
final class SubscriptionUpdate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'default_allowed_updates',
        'enabled',
        'proration_behavior',
        'schedule_at_period_end',
        'trial_update_behavior',
    ];

    /**
     * Determines the value to use for the billing cycle anchor on subscription updates. Valid values are `now` or `unchanged`, and the default value is `unchanged`. Setting the value to `now` resets the subscription's billing cycle anchor to the current time (in UTC). For more information, see the billing cycle [documentation](https://docs.stripe.com/billing/subscriptions/billing-cycle).
     */
    public ?\StripeSDK\Enums\Portal\SubscriptionUpdate\CycleAnchorEnum $billing_cycle_anchor;
    /**
     * The types of subscription updates that are supported for items listed in the `products` attribute. When empty, subscriptions are not updateable.
     */
    public \StripeSDK\Collections\Portal\SubscriptionUpdate\AllowedUpdatesCollection $default_allowed_updates;
    /**
     * Whether the feature is enabled.
     */
    public bool $enabled;
    /**
     * The list of up to 10 products that support subscription updates.
     */
    public ?\StripeSDK\Collections\Portal\SubscriptionUpdate\ProductsCollection $products;
    /**
     * Determines how to handle prorations resulting from subscription updates. Valid values are `none`, `create_prorations`, and `always_invoice`. Defaults to a value of `none` if you don't set it during creation.
     */
    public \StripeSDK\Enums\Portal\SubscriptionUpdate\ProrationBehaviorEnum $proration_behavior;
    public \StripeSDK\DTOs\Portal\ResourceScheduleUpdateAtPeriodEnd $schedule_at_period_end;
    /**
     * Determines how handle updates to trialing subscriptions. Valid values are `end_trial` and `continue_trial`. Defaults to a value of `end_trial` if you don't set it during creation.
     */
    public \StripeSDK\Enums\Portal\SubscriptionUpdate\UpdateBehaviorEnum $trial_update_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_cycle_anchor' => $value === null || is_string($value) ? $this->billing_cycle_anchor = $value === null ? null : \StripeSDK\Enums\Portal\SubscriptionUpdate\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'products' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->products = $value === null ? null : new \StripeSDK\Collections\Portal\SubscriptionUpdate\ProductsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Portal\SubscriptionUpdateProduct::class)) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\Portal\SubscriptionUpdate\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'schedule_at_period_end' => $value instanceof \stdClass ? $this->schedule_at_period_end = new \StripeSDK\DTOs\Portal\ResourceScheduleUpdateAtPeriodEnd($value) : parent::assignMember($name, $value),
            'trial_update_behavior' => is_string($value) ? $this->trial_update_behavior = \StripeSDK\Enums\Portal\SubscriptionUpdate\UpdateBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
