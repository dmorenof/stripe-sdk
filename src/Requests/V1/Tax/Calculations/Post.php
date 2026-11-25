<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Calculations;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'line_items',
    ];

    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * The ID of an existing customer to use for this calculation. If provided, the customer's address and tax IDs are copied to `customer_details`.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * Details about the customer, including address and tax IDs.
     */
    public \StripeSDK\Requests\V1\Tax\Calculations\Post\CustomerDetailsRequest $customer_details;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A list of items the customer is purchasing. You can pass up to 100 line items, or 1,000 if your account has an increased limit.
     */
    public \StripeSDK\Collections\V1\Tax\Calculations\Post\LineItemsCollection $line_items;
    /**
     * Details about the address from which the goods are being shipped.
     */
    public \StripeSDK\Requests\V1\Tax\Calculations\Post\FromDetailsRequest $ship_from_details;
    /**
     * Shipping cost details to be used for the calculation.
     */
    public \StripeSDK\Requests\V1\Tax\Calculations\Post\ShippingCostRequest $shipping_cost;
    /**
     * The calculation uses the tax rules and rates that are in effect at this timestamp. You can use a date up to 31 days in the past or up to 31 days in the future. If you use a future date, Stripe doesn't guarantee that the expected tax rules and rate being used match the actual rules and rate that will be in effect on that date. We deploy tax changes before their effective date, but not within a fixed window.
     */
    public int $tax_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'tax_date' => is_int($value) ? $this->tax_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
