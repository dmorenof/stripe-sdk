<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Tax;

/**
 * Tax Calculation Line Item
 *
 * A Tax Calculation Line Item represents a single item in a tax calculation.
 */
final class CalculationLineItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_tax',
        'id',
        'livemode',
        'object_',
        'quantity',
        'reference',
        'tax_behavior',
        'tax_code',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'performance_location' => [
            'maxLength' => 5000,
        ],
        'product' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 5000,
        ],
        'tax_code' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The line item amount in the [smallest currency unit](https://docs.stripe.com/currencies#minor-units). If `tax_behavior=inclusive`, then this amount includes taxes. Otherwise, taxes were calculated on top of this amount.
     */
    public int $amount;
    /**
     * The amount of tax calculated for this line item, in the [smallest currency unit](https://docs.stripe.com/currencies#minor-units).
     */
    public int $amount_tax;
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
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Tax\CalculationLineItem\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Tax\CalculationLineItem\ObjectEnum $object_;
    /**
     * Indicates the line item represents a performance where the venue location might determine the tax, not the customer address. Leave empty if the tax code doesn't require a tax location. If you provide this value for tax codes with an `optional` location requirement, it overrides the customer address.
     */
    public ?string $performance_location {
        set {
            $this->assigning('performance_location', $value);
            $this->performance_location = $value;
        }
    }
    /**
     * The ID of an existing [Product](https://docs.stripe.com/api/products/object).
     */
    public ?string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }
    /**
     * The number of units of the item being purchased. For reversals, this is the quantity reversed.
     */
    public int $quantity;
    /**
     * A custom identifier for this line item.
     */
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    /**
     * Specifies whether the `amount` includes taxes. If `tax_behavior=inclusive`, then the amount includes taxes.
     */
    public \StripeSDK\Enums\Tax\CalculationLineItem\TaxBehaviorEnum $tax_behavior;
    /**
     * Detailed account of taxes relevant to this line item.
     */
    public ?\StripeSDK\Collections\Tax\CalculationLineItem\TaxBreakdownCollection $tax_breakdown;
    /**
     * The [tax code](https://docs.stripe.com/tax/tax-categories) ID used for this resource.
     */
    public string $tax_code {
        set {
            $this->assigning('tax_code', $value);
            $this->tax_code = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_tax' => is_int($value) ? $this->amount_tax = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Tax\CalculationLineItem\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'performance_location' => $value === null || is_string($value) ? $this->performance_location = $value : parent::assignMember($name, $value),
            'product' => $value === null || is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\Tax\CalculationLineItem\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tax_breakdown' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->tax_breakdown = $value === null ? null : new \StripeSDK\Collections\Tax\CalculationLineItem\TaxBreakdownCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxProduct\ResourceLineItemTaxBreakdown::class)) : parent::assignMember($name, $value),
            'tax_code' => is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
