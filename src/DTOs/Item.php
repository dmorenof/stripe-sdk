<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * LineItem
 *
 * A line item.
 */
final class Item extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_discount',
        'amount_subtotal',
        'amount_tax',
        'amount_total',
        'currency',
        'id',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\LineItems\AdjustableQuantity $adjustable_quantity;
    /**
     * Total discount amount applied. If no discounts were applied, defaults to 0.
     */
    public int $amount_discount;
    /**
     * Total before any discounts or taxes are applied.
     */
    public int $amount_subtotal;
    /**
     * Total tax amount applied. If no tax was applied, defaults to 0.
     */
    public int $amount_tax;
    /**
     * Total after discounts and taxes.
     */
    public int $amount_total;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users. Defaults to product name.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The discounts applied to the line item.
     */
    public \StripeSDK\Collections\Item\DiscountsCollection $discounts;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Item\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Item\ObjectEnum $object_;
    /**
     * The price used to generate the line item.
     */
    public ?\StripeSDK\DTOs\Price $price;
    /**
     * The quantity of products being purchased.
     */
    public ?int $quantity;
    /**
     * The taxes applied to the line item.
     */
    public \StripeSDK\Collections\InvoicesResource\ShippingCost\TaxesCollection $taxes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adjustable_quantity' => $value === null || $value instanceof \stdClass ? $this->adjustable_quantity = $value === null ? null : new \StripeSDK\DTOs\LineItems\AdjustableQuantity($value) : parent::assignMember($name, $value),
            'amount_discount' => is_int($value) ? $this->amount_discount = $value : parent::assignMember($name, $value),
            'amount_subtotal' => is_int($value) ? $this->amount_subtotal = $value : parent::assignMember($name, $value),
            'amount_tax' => is_int($value) ? $this->amount_tax = $value : parent::assignMember($name, $value),
            'amount_total' => is_int($value) ? $this->amount_total = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->discounts = new \StripeSDK\Collections\Item\DiscountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\LineItems\DiscountAmount::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Item\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'price' => $value === null || $value instanceof \stdClass ? $this->price = $value === null ? null : new \StripeSDK\DTOs\Price($value) : parent::assignMember($name, $value),
            'quantity' => $value === null || is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'taxes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->taxes = new \StripeSDK\Collections\InvoicesResource\ShippingCost\TaxesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\LineItems\TaxAmount::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
