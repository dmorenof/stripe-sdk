<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Price
 *
 * Prices define the unit cost, currency, and (optional) billing cycle for both recurring and one-time purchases of products.
 * [Products](https://docs.stripe.com/api#products) help you track inventory or provisioning, and prices help you track payment terms. Different physical goods or levels of service should be represented by products, and pricing options should be represented by prices. This approach lets you change prices without having to change your provisioning scheme.
 *
 * For example, you might have a single "gold" product that has prices for $10/month, $100/year, and €9 once.
 *
 * Related guides: [Set up a subscription](https://docs.stripe.com/billing/subscriptions/set-up-subscription), [create an invoice](https://docs.stripe.com/billing/invoices/create), and more about [products and prices](https://docs.stripe.com/products-prices/overview).
 */
final class Price extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'billing_scheme',
        'created',
        'currency',
        'id',
        'livemode',
        'metadata',
        'object_',
        'product',
        'type',
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
        'lookup_key' => [
            'maxLength' => 5000,
        ],
        'nickname' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the price can be used for new purchases.
     */
    public bool $active;
    /**
     * Describes how to compute the price per period. Either `per_unit` or `tiered`. `per_unit` indicates that the fixed amount (specified in `unit_amount` or `unit_amount_decimal`) will be charged per unit in `quantity` (for prices with `usage_type=licensed`), or per unit of total usage (for prices with `usage_type=metered`). `tiered` indicates that the unit pricing will be computed using a tiering strategy as defined using the `tiers` and `tiers_mode` attributes.
     */
    public \StripeSDK\Enums\Price\BillingSchemeEnum $billing_scheme;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Prices defined in each available currency option. Each key must be a three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html) and a [supported currency](https://stripe.com/docs/currencies).
     */
    public \StripeSDK\DTOs\Price\CurrencyOptionsMap $currency_options;
    /**
     * When set, provides configuration for the amount to be adjusted by the customer during Checkout Sessions and Payment Links.
     */
    public ?\StripeSDK\DTOs\CustomUnitAmount $custom_unit_amount;
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
     * A lookup key used to retrieve prices dynamically from a static string. This may be up to 200 characters.
     */
    public ?string $lookup_key {
        set {
            $this->assigning('lookup_key', $value);
            $this->lookup_key = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Price\MetadataMap $metadata;
    /**
     * A brief description of the price, hidden from customers.
     */
    public ?string $nickname {
        set {
            $this->assigning('nickname', $value);
            $this->nickname = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Price\ObjectEnum $object_;
    /**
     * The ID of the product this price is associated with.
     */
    public \StripeSDK\DTOs\Price\ProductDTO $product;
    /**
     * The recurring components of a price such as `interval` and `usage_type`.
     */
    public ?\StripeSDK\DTOs\Recurring $recurring;
    /**
     * Only required if a [default tax behavior](https://docs.stripe.com/tax/products-prices-tax-categories-tax-behavior#setting-a-default-tax-behavior-(recommended)) was not provided in the Stripe Tax settings. Specifies whether the price is considered inclusive of taxes or exclusive of taxes. One of `inclusive`, `exclusive`, or `unspecified`. Once specified as either `inclusive` or `exclusive`, it cannot be changed.
     */
    public ?\StripeSDK\Enums\Price\TaxBehaviorEnum $tax_behavior;
    /**
     * Each element represents a pricing tier. This parameter requires `billing_scheme` to be set to `tiered`. See also the documentation for `billing_scheme`.
     */
    public \StripeSDK\Collections\CurrencyOption\TiersCollection $tiers;
    /**
     * Defines if the tiering price should be `graduated` or `volume` based. In `volume`-based tiering, the maximum quantity within a period determines the per unit price. In `graduated` tiering, pricing can change as the quantity grows.
     */
    public ?\StripeSDK\Enums\Price\TiersModeEnum $tiers_mode;
    /**
     * Apply a transformation to the reported usage or set quantity before computing the amount billed. Cannot be combined with `tiers`.
     */
    public ?\StripeSDK\DTOs\TransformQuantity $transform_quantity;
    /**
     * One of `one_time` or `recurring` depending on whether the price is for a one-time purchase or a recurring (subscription) purchase.
     */
    public \StripeSDK\Enums\Price\TypeEnum $type;
    /**
     * The unit amount in cents (or local equivalent) to be charged, represented as a whole integer if possible. Only set if `billing_scheme=per_unit`.
     */
    public ?int $unit_amount;
    /**
     * The unit amount in cents (or local equivalent) to be charged, represented as a decimal string with at most 12 decimal places. Only set if `billing_scheme=per_unit`.
     * Format: decimal
     */
    public ?string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'billing_scheme' => is_string($value) ? $this->billing_scheme = \StripeSDK\Enums\Price\BillingSchemeEnum::from($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'custom_unit_amount' => $value === null || $value instanceof \stdClass ? $this->custom_unit_amount = $value === null ? null : new \StripeSDK\DTOs\CustomUnitAmount($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'lookup_key' => $value === null || is_string($value) ? $this->lookup_key = $value : parent::assignMember($name, $value),
            'nickname' => $value === null || is_string($value) ? $this->nickname = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Price\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'recurring' => $value === null || $value instanceof \stdClass ? $this->recurring = $value === null ? null : new \StripeSDK\DTOs\Recurring($value) : parent::assignMember($name, $value),
            'tax_behavior' => $value === null || is_string($value) ? $this->tax_behavior = $value === null ? null : \StripeSDK\Enums\Price\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tiers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tiers = new \StripeSDK\Collections\CurrencyOption\TiersCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\PriceTier::class)) : parent::assignMember($name, $value),
            'tiers_mode' => $value === null || is_string($value) ? $this->tiers_mode = $value === null ? null : \StripeSDK\Enums\Price\TiersModeEnum::from($value) : parent::assignMember($name, $value),
            'transform_quantity' => $value === null || $value instanceof \stdClass ? $this->transform_quantity = $value === null ? null : new \StripeSDK\DTOs\TransformQuantity($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Price\TypeEnum::from($value) : parent::assignMember($name, $value),
            'unit_amount' => $value === null || is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => $value === null || is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
