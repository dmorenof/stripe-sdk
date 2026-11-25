<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post;

/**
 * billing_cycle_anchor_param
 *
 * Controls how the subscription's billing cycle anchor changes. Set `type` to `now` to reset the billing cycle anchor to the current time (in UTC), or `unchanged` to preserve it. For more information, see the billing cycle [documentation](https://docs.stripe.com/billing/subscriptions/billing-cycle).
 */
final class CycleAnchorRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Enums\V1\Subscriptions\BySubscriptionExposedId\Post\BillingCycleAnchor\AnchorTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Subscriptions\BySubscriptionExposedId\Post\BillingCycleAnchor\AnchorTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
