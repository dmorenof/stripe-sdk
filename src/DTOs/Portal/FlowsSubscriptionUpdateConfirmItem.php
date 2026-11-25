<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalFlowsSubscriptionUpdateConfirmItem
 */
final class FlowsSubscriptionUpdateConfirmItem extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ID of the [subscription item](https://docs.stripe.com/api/subscriptions/object#subscription_object-items-data-id) to be updated.
     */
    public ?string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The price the customer should subscribe to through this flow. The price must also be included in the configuration's [`features.subscription_update.products`](https://docs.stripe.com/api/customer_portal/configuration#portal_configuration_object-features-subscription_update-products).
     */
    public ?string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    /**
     * [Quantity](https://docs.stripe.com/subscriptions/quantities) for this item that the customer should subscribe to through this flow.
     */
    public int $quantity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => $value === null || is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'price' => $value === null || is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
