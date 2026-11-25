<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Source;

/**
 * SourceOrderItem
 */
final class OrderItem extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'parent' => 'parent_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'parent_' => 'parent',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'parent_' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The amount (price) for this order item.
     */
    public ?int $amount;
    /**
     * This currency of this order item. Required when `amount` is present.
     */
    public ?string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * Human-readable description for this order item.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The ID of the associated object for this line item. Expandable if not null (e.g., expandable to a SKU).
     */
    public ?string $parent_ {
        set {
            $this->assigning('parent_', $value);
            $this->parent_ = $value;
        }
    }
    /**
     * The quantity of this order item. When type is `sku`, this is the number of instances of the SKU to be ordered.
     */
    public int $quantity;
    /**
     * The type of this order item. Must be `sku`, `tax`, or `shipping`.
     */
    public ?string $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => $value === null || is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'parent' => $value === null || is_string($value) ? $this->parent_ = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'type' => $value === null || is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
