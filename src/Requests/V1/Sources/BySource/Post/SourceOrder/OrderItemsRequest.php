<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Sources\BySource\Post\SourceOrder;

/**
 * order_item_specs
 */
final class OrderItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array PROPERTY_MAP = [
        'parent' => 'parent_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'parent_' => 'parent',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 1000,
        ],
        'parent_' => [
            'maxLength' => 5000,
        ],
        'type' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    /**
     * Format: currency
     */
    public string $currency;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public string $parent_ {
        set {
            $this->assigning('parent_', $value);
            $this->parent_ = $value;
        }
    }
    public int $quantity;
    public \StripeSDK\Enums\V1\Sources\BySource\Post\SourceOrder\ItemsItem\ItemsItemTypeEnum $type {
        set {
            $this->assigning('type', $value);
            $this->type = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'parent' => is_string($value) ? $this->parent_ = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Sources\BySource\Post\SourceOrder\ItemsItem\ItemsItemTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
