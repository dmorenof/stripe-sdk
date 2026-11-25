<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Prices;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
    ];

    protected const array VALIDATION = [
        'lookup_key' => [
            'maxLength' => 200,
        ],
        'nickname' => [
            'maxLength' => 5000,
        ],
        'product' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the price can be used for new purchases. Defaults to `true`.
     */
    public bool $active;
    /**
     * Describes how to compute the price per period. Either `per_unit` or `tiered`. `per_unit` indicates that the fixed amount (specified in `unit_amount` or `unit_amount_decimal`) will be charged per unit in `quantity` (for prices with `usage_type=licensed`), or per unit of total usage (for prices with `usage_type=metered`). `tiered` indicates that the unit pricing will be computed using a tiering strategy as defined using the `tiers` and `tiers_mode` attributes.
     */
    public \StripeSDK\Enums\V1\Prices\Post\BillingSchemeEnum $billing_scheme;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Prices defined in each available currency option. Each key must be a three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html) and a [supported currency](https://stripe.com/docs/currencies).
     */
    public \StripeSDK\Requests\V1\Prices\Post\OptionsMapRequest $currency_options;
    /**
     * When set, provides configuration for the amount to be adjusted by the customer during Checkout Sessions and Payment Links.
     */
    public \StripeSDK\Requests\V1\Prices\Post\UnitAmountRequest $custom_unit_amount;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A lookup key used to retrieve prices dynamically from a static string. This may be up to 200 characters.
     */
    public string $lookup_key {
        set {
            $this->assigning('lookup_key', $value);
            $this->lookup_key = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Prices\Post\MetadataMapRequest $metadata;
    /**
     * A brief description of the price, hidden from customers.
     */
    public string $nickname {
        set {
            $this->assigning('nickname', $value);
            $this->nickname = $value;
        }
    }
    /**
     * The ID of the [Product](https://docs.stripe.com/api/products) that this [Price](https://docs.stripe.com/api/prices) will belong to.
     */
    public string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }
    /**
     * These fields can be used to create a new product that this price will belong to.
     */
    public \StripeSDK\Requests\V1\Prices\Post\ProductDataRequest $product_data;
    /**
     * The recurring components of a price such as `interval` and `usage_type`.
     */
    public \StripeSDK\Requests\V1\Prices\Post\PricesRecurringRequest $recurring;
    /**
     * Only required if a [default tax behavior](https://docs.stripe.com/tax/products-prices-tax-categories-tax-behavior#setting-a-default-tax-behavior-(recommended)) was not provided in the Stripe Tax settings. Specifies whether the price is considered inclusive of taxes or exclusive of taxes. One of `inclusive`, `exclusive`, or `unspecified`. Once specified as either `inclusive` or `exclusive`, it cannot be changed.
     */
    public \StripeSDK\Enums\V1\Prices\Post\TaxBehaviorEnum $tax_behavior;
    /**
     * Each element represents a pricing tier. This parameter requires `billing_scheme` to be set to `tiered`. See also the documentation for `billing_scheme`.
     */
    public \StripeSDK\Collections\V1\Prices\Post\PricesTiersCollection $tiers;
    /**
     * Defines if the tiering price should be `graduated` or `volume` based. In `volume`-based tiering, the maximum quantity within a period determines the per unit price, in `graduated` tiering pricing can successively change as the quantity grows.
     */
    public \StripeSDK\Enums\V1\Prices\Post\TiersModeEnum $tiers_mode;
    /**
     * If set to true, will atomically remove the lookup key from the existing price, and assign it to this price.
     */
    public bool $transfer_lookup_key;
    /**
     * Apply a transformation to the reported usage or set quantity before computing the billed price. Cannot be combined with `tiers`.
     */
    public \StripeSDK\Requests\V1\Prices\Post\TransformQuantityRequest $transform_quantity;
    /**
     * A positive integer in cents (or local equivalent) (or 0 for a free price) representing how much to charge. One of `unit_amount`, `unit_amount_decimal`, or `custom_unit_amount` is required, unless `billing_scheme=tiered`.
     */
    public int $unit_amount;
    /**
     * Same as `unit_amount`, but accepts a decimal value in cents (or local equivalent) with at most 12 decimal places. Only one of `unit_amount` and `unit_amount_decimal` can be set.
     * Format: decimal
     */
    public string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'billing_scheme' => is_string($value) ? $this->billing_scheme = \StripeSDK\Enums\V1\Prices\Post\BillingSchemeEnum::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'lookup_key' => is_string($value) ? $this->lookup_key = $value : parent::assignMember($name, $value),
            'nickname' => is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'product' => is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Prices\Post\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tiers_mode' => is_string($value) ? $this->tiers_mode = \StripeSDK\Enums\V1\Prices\Post\TiersModeEnum::from($value) : parent::assignMember($name, $value),
            'transfer_lookup_key' => is_bool($value) ? $this->transfer_lookup_key = $value : parent::assignMember($name, $value),
            'unit_amount' => is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
