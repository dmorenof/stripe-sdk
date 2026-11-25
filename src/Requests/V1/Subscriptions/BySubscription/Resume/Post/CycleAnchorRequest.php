<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscription\Resume\Post;

/**
 * billing_cycle_anchor_param
 *
 * The billing cycle anchor that applies when the subscription is resumed. Either `now` or `unchanged`. The default is `now`. For more information, see the billing cycle [documentation](https://docs.stripe.com/billing/subscriptions/billing-cycle).
 */
final class CycleAnchorRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Enums\V1\Subscriptions\BySubscription\Resume\Post\BillingCycleAnchor\AnchorTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Subscriptions\BySubscription\Resume\Post\BillingCycleAnchor\AnchorTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
