<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features;

/**
 * subscription_update_updating_param
 */
final class SubscriptionUpdateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\CycleAnchorEnum $billing_cycle_anchor;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\AllowedUpdatesRequest $default_allowed_updates;
    public bool $enabled;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\UpdateProductsRequest $products;
    public \StripeSDK\Enums\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\ProrationBehaviorEnum $proration_behavior;
    public \StripeSDK\Requests\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\PeriodEndRequest $schedule_at_period_end;
    public \StripeSDK\Enums\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\UpdateBehaviorEnum $trial_update_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_cycle_anchor' => is_string($value) ? $this->billing_cycle_anchor = \StripeSDK\Enums\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'trial_update_behavior' => is_string($value) ? $this->trial_update_behavior = \StripeSDK\Enums\V1\BillingPortal\Configurations\ByConfiguration\Post\Features\SubscriptionUpdate\UpdateBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
