<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Portal;

/**
 * PortalSubscriptionUpdateProduct
 */
final class SubscriptionUpdateProduct extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'adjustable_quantity',
        'prices',
        'product',
    ];

    protected const array VALIDATION = [
        'product' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Portal\SubscriptionUpdateProductAdjustableQuantity $adjustable_quantity;
    /**
     * The list of price IDs which, when subscribed to, a subscription can be updated.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $prices;
    /**
     * The product ID.
     */
    public string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adjustable_quantity' => $value instanceof \stdClass ? $this->adjustable_quantity = new \StripeSDK\DTOs\Portal\SubscriptionUpdateProductAdjustableQuantity($value) : parent::assignMember($name, $value),
            'prices' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->prices = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'product' => is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
