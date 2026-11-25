<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsFlowSubscriptionUpdateConfirm
 */
final class FlowsFlowSubscriptionUpdateConfirm extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'items',
        'subscription',
    ];

    protected const array VALIDATION = [
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The coupon or promotion code to apply to this subscription update.
     */
    public ?\StripeSDK\Collections\Portal\FlowsFlowSubscriptionUpdateConfirm\DiscountsCollection $discounts;
    /**
     * The [subscription item](https://docs.stripe.com/api/subscription_items) to be updated through this flow. Currently, only up to one may be specified and subscriptions with multiple items are not updatable.
     */
    public \StripeSDK\Collections\Portal\FlowsFlowSubscriptionUpdateConfirm\ItemsCollection $items;
    /**
     * The ID of the subscription to be updated.
     */
    public string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discounts' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->discounts = $value === null ? null : new \StripeSDK\Collections\Portal\FlowsFlowSubscriptionUpdateConfirm\DiscountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Portal\FlowsSubscriptionUpdateConfirmDiscount::class)) : parent::assignMember($name, $value),
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \StripeSDK\Collections\Portal\FlowsFlowSubscriptionUpdateConfirm\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Portal\FlowsSubscriptionUpdateConfirmItem::class)) : parent::assignMember($name, $value),
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
