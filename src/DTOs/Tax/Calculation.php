<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Tax;

/**
 * Tax Calculation
 *
 * A Tax Calculation allows you to calculate the tax to collect from your customer.
 *
 * Related guide: [Calculate tax in your custom payment flow](https://docs.stripe.com/tax/custom)
 */
final class Calculation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_total',
        'currency',
        'customer_details',
        'livemode',
        'object_',
        'tax_amount_exclusive',
        'tax_amount_inclusive',
        'tax_breakdown',
        'tax_date',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'maxLength' => 5000,
        ],
        'customer' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Total amount after taxes in the [smallest currency unit](https://docs.stripe.com/currencies#minor-units).
     */
    public int $amount_total;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * The ID of an existing [Customer](https://docs.stripe.com/api/customers/object) used for the resource.
     */
    public ?string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    public \StripeSDK\DTOs\TaxProduct\ResourceCustomerDetails $customer_details;
    /**
     * Timestamp of date at which the tax calculation will expire.
     * Format: unix-time
     */
    public ?int $expires_at;
    /**
     * Unique identifier for the calculation.
     */
    public ?string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The list of items the customer is purchasing.
     */
    public ?\StripeSDK\DTOs\Tax\Calculation\LineItemsDTO $line_items;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Tax\Calculation\ObjectEnum $object_;
    /**
     * The details of the ship from location, such as the address.
     */
    public ?\StripeSDK\DTOs\TaxProduct\ResourceShipFromDetails $ship_from_details;
    /**
     * The shipping cost details for the calculation.
     */
    public ?\StripeSDK\DTOs\TaxProduct\ResourceTaxCalculationShippingCost $shipping_cost;
    /**
     * The amount of tax to be collected on top of the line item prices.
     */
    public int $tax_amount_exclusive;
    /**
     * The amount of tax already included in the line item prices.
     */
    public int $tax_amount_inclusive;
    /**
     * Breakdown of individual tax amounts that add up to the total.
     */
    public \StripeSDK\Collections\Tax\Calculation\TaxBreakdownCollection $tax_breakdown;
    /**
     * The calculation uses the tax rules and rates that are in effect at this timestamp. You can use a date up to 31 days in the past or up to 31 days in the future. If you use a future date, Stripe doesn't guarantee that the expected tax rules and rate being used match the actual rules and rate that will be in effect on that date. We deploy tax changes before their effective date, but not within a fixed window.
     * Format: unix-time
     */
    public int $tax_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_total' => is_int($value) ? $this->amount_total = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => $value === null || is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_details' => $value instanceof \stdClass ? $this->customer_details = new \StripeSDK\DTOs\TaxProduct\ResourceCustomerDetails($value) : parent::assignMember($name, $value),
            'expires_at' => $value === null || is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => $value === null || is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Tax\Calculation\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'ship_from_details' => $value === null || $value instanceof \stdClass ? $this->ship_from_details = $value === null ? null : new \StripeSDK\DTOs\TaxProduct\ResourceShipFromDetails($value) : parent::assignMember($name, $value),
            'shipping_cost' => $value === null || $value instanceof \stdClass ? $this->shipping_cost = $value === null ? null : new \StripeSDK\DTOs\TaxProduct\ResourceTaxCalculationShippingCost($value) : parent::assignMember($name, $value),
            'tax_amount_exclusive' => is_int($value) ? $this->tax_amount_exclusive = $value : parent::assignMember($name, $value),
            'tax_amount_inclusive' => is_int($value) ? $this->tax_amount_inclusive = $value : parent::assignMember($name, $value),
            'tax_breakdown' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tax_breakdown = new \StripeSDK\Collections\Tax\Calculation\TaxBreakdownCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxProduct\ResourceTaxBreakdown::class)) : parent::assignMember($name, $value),
            'tax_date' => is_int($value) ? $this->tax_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
